@extends('layouts/layout')



@section('content')
    <div class="container-arch flex-arch">





        <div class="archive-area section-archive">




            {{-- <div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a class="breadcrumbs__link" href="http://projtct-blog2/" itemprop="item"><span itemprop="name">Главная</span></a><meta itemprop="position" content="1" /></span><span class="breadcrumbs__separator"> › </span><span class="breadcrumbs__current">Block</span></div><!-- .breadcrumbs -->--}}



            {{--<div class="archive_description"><p>Items in the block tag have been created with the block editor.</p>
            </div>--}}




            <div class="container-archive">


                @foreach($comments as $comment)
                    <h3>{{$comment->subject}}</h3>
                    <p>{{$comment->body}}</p>
                    <h3>{{$comment->film_id}}</h3>
                    <h3>{{$comment->film->title}}</h3>
                    <hr>
                @endforeach


                <div class="pagination-new">
                    {{--{{$comments->links()}}--}}
                    </nav>
                </div>

            </div>
        </div>





    </div>
@endsection


