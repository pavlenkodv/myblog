@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Hi! This is Dashboard
                <small>it all starts here</small>
            </h1>
        </section>
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <a href="/" class="fa fa-paper-plane"> Go to Homepage</a>
                </div>
                <div class="box-body">
                    <p>From the Dashboard's Home page, you can quickly access your site's content.</p>
                    <p>The Dashboard Screen provides you a number of links to start writing Posts or Pages;<br> statistics and links on the number of posts, pages; Categories; and Tags.</p>
                </div>
                <div class="box-footer">
                    A Recent Comments box shows the number of Comments awaiting moderation and a list of the recent comments.
                </div>
            </div>
        </section>
    </div>
@endsection