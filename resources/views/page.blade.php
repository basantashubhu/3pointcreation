@extends('layouts.master')

@push('styles')
    <style>
        table.table-bordered {
            border: none;
            & td, & th, & tr {
                border: none;
            }
            & td:first-child {
                width: 50%;
            }
            & iframe {
                width: 100%;
            }
        }
        @media screen and (max-width: 992px) {
            table.table-bordered {
                & tr {
                    display: flex;
                    flex-direction: column;
                    & td {
                        width: 100% !important;
                    }
                }
            }
        }
    </style>
@endpush

@section('content')
    <section class="section-show">
        @foreach($menu->posts as $post)
            <div class="resume">
                <div class="container">

                    <div class="section-title">
                        <h2>{{ $menu->name }}</h2>
                        <p>{{ $post->title }}</p>
                    </div>

                    <div>
                        {!! $post->content !!}
                    </div>

                </div>
            </div>
        @endforeach
    </section>
@endsection
