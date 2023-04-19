@extends('layouts.front-page')

@section('content')

    {{-- {# TEAM #} --}}
    <div class="py-6">
        <div class="px-4 py-12 mx-auto border-b-2 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8 lg:py-14">
            <div class="md:w-5/6 md:mx-auto md:max-w-2xl">
                <h1 class="text-slate-900 text-3xl text-center font-bold dark:text-white sm:text-4xl">Our Team</h1>
                <p class="text-center text-lg mt-2">It is a long established fact that a reader will be distracted by the
                    readable content of a page when looking at its layout</p>
            </div>
            <div class="grid gap-10 mx-auto mt-8 sm:grid-cols-2 lg:grid-cols-4 lg:max-w-screen-lg">

                @if (have_rows('blocks'))
                    @while (have_rows('blocks'))
                        @php(the_row())
                        @if (have_rows('heros'))
                            @while (have_rows('heros'))
                                @php(the_row())
                                <div class="">
                                    <div class="relative pb-56 mb-4 rounded-global shadow lg:pb-64">
                                        {!! wp_get_attachment_image(get_sub_field('image')['ID'], [333,333], false, [
                                            // 'style' => 'max-width: 120px;',
                                            'class' => 'absolute object-cover w-full h-full rounded-global bg-blue-100 object-center',
                                        ]) !!}
                                    </div>
                                    <div class="flex flex-col sm:text-center">
                                        <p class="text-lg font-bold text-slate-900 dark:text-slate-100">
                                            {!! get_sub_field('name') !!}</p>
                                        <p class="mb-5 text-sm">{!! get_sub_field('designation') !!}</p>
                                        <div class="flex items-center space-x-3 sm:justify-center">
                                            @if (have_rows('social_media'))
                                                @while (have_rows('social_media'))
                                                    @php(the_row())
                                                    <a class="transition-colors duration-300 hover:text-deep-purple-accent-400"
                                                        href="{!! get_sub_field('url') !!}">
                                                        <span class="h-5">
                                                            <i class="fab fa-{!! strtolower(get_sub_field('platform')) !!}"></i>
                                                        </span>
                                                    </a>
                                                @endwhile
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endwhile
                            @endif
                        @endwhile
                    @endif
            </div>
        </div>
    </div>



@endsection
