@extends('frontend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            {{--section content--}}
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-default">
                            <div class="box-header with-border">
                                <h3 class="box-title">Updating post</h3>
                            </div>
                            <div class="box-body">
                                <form method="POST" action="{{ url('/posts/update') }}/{{ $post->id }}"
                                      enctype="multipart/form-data" files="true" novalidate="novalidate">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <textarea id="body_post" class="form-control" role="8" rows="4"
                                                  name="body">{!! $post->body !!}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="published">
                                            <input type="checkbox" name="published" id="published" checked>
                                            Published now
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="file" accept="image/*">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--section side bar--}}
            <div class="col-md-4" id="side-right">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-default">
                            <div class="box-body">
                                <ul class="media-list">
                                    <li class="media">
                                        <div class="media-left">
                                            <img class="media-object" src="{{ asset('img/icon.png') }}"
                                                 alt="Profile picture" style="width: 60px; height: 60px;">
                                        </div><!--media-left-->

                                        <div class="media-body">
                                            <h4 class="media-heading">
                                                {{ $logged_in_user->name }}<br/>
                                                <small>
                                                    {{ $logged_in_user->email }}<br/>
                                                    Joined {{ $logged_in_user->created_at->format('F jS, Y') }}
                                                </small>
                                            </h4>

                                            {{ link_to_route('frontend.user.account', trans('navs.frontend.user.account'), [], ['class' => 'btn btn-info btn-xs']) }}

                                            @permission('view-backend')
                                            {{ link_to_route('admin.dashboard', trans('navs.frontend.user.administration'), [], ['class' => 'btn btn-danger btn-xs']) }}
                                            @endauth
                                        </div><!--media-body-->
                                    </li><!--media-->
                                </ul><!--media-list-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="box box-default">
                            <div class="box-header with-border">
                                <h4>Sidebar Item</h4>
                            </div>
                            <div class="box-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non qui facilis deleniti
                                expedita fuga ipsum numquam aperiam itaque cum maxime.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="box box-default">
                            <div class="box-header with-border">
                                <h4>Sidebar Item</h4>
                            </div>
                            <div class="box-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non qui facilis deleniti
                                expedita fuga ipsum numquam aperiam itaque cum maxime.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- row -->
@endsection