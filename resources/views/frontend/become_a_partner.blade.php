@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))


@push('after-styles')
    <link rel="stylesheet" href="{{ url('aqo_se/Styles/css/about_us.css') }}">
@endpush


@section('content')

<div class="container-fluid p-0 banner partner-banner">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8" style="padding-top: 11rem">
                <h1 class="title" style="font-size: 70px;">Become a Partner</h1>
                <h2 class="d-none">Become a Partner</h2>
            </div>
        </div>
    </div>
</div>


<!-- <div class="container my-5">
    <div class="row">
        <div class="col-12">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, totam. Fuga eum voluptatem rerum placeat repellendus, illum quidem provident ullam impedit eligendi quae assumenda suscipit blanditiis corrupti deserunt quisquam alias laudantium sunt commodi consequuntur! Nulla harum tenetur autem ipsam error ab eligendi? Sunt sint quis est similique, vero distinctio. Nesciunt quae neque eos ea culpa eveniet enim consectetur, saepe provident quasi dolor labore fugit, accusantium deserunt nobis nulla quis esse est fugiat, recusandae optio similique. Ducimus ipsum error vitae, eveniet aperiam labore ab dolorum officiis fugit dolorem corporis animi necessitatibus cupiditate voluptate odit sed reprehenderit deserunt iure explicabo hic id doloremque. Sed rerum nulla, eligendi quos aliquam, error laudantium officiis corrupti, eos dicta quia voluptatem officia animi ut repellat.</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, totam. Fuga eum voluptatem rerum placeat repellendus, illum quidem provident ullam impedit eligendi quae assumenda suscipit blanditiis corrupti deserunt quisquam alias laudantium sunt commodi consequuntur! Nulla harum tenetur autem ipsam error ab eligendi? Sunt sint quis est similique, vero distinctio. Nesciunt quae neque eos ea culpa eveniet enim consectetur, saepe provident quasi dolor labore fugit, accusantium deserunt nobis nulla quis esse est fugiat, recusandae optio similique. Ducimus ipsum error vitae, eveniet aperiam labore ab dolorum officiis fugit dolorem corporis animi necessitatibus cupiditate voluptate odit sed reprehenderit deserunt iure explicabo hic id doloremque. Sed rerum nulla, eligendi quos aliquam, error laudantium officiis corrupti, eos dicta quia voluptatem officia animi ut repellat.</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, totam. Fuga eum voluptatem rerum placeat repellendus, illum quidem provident ullam impedit eligendi quae assumenda suscipit blanditiis corrupti deserunt quisquam alias laudantium sunt commodi consequuntur! Nulla harum tenetur autem ipsam error ab eligendi? Sunt sint quis est similique, vero distinctio. Nesciunt quae neque eos ea culpa eveniet enim consectetur, saepe provident quasi dolor labore fugit, accusantium deserunt nobis nulla quis esse est fugiat, recusandae optio similique. Ducimus ipsum error vitae, eveniet aperiam labore ab dolorum officiis fugit dolorem corporis animi necessitatibus cupiditate voluptate odit sed reprehenderit deserunt iure explicabo hic id doloremque. Sed rerum nulla, eligendi quos aliquam, error laudantium officiis corrupti, eos dicta quia voluptatem officia animi ut repellat.</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, totam. Fuga eum voluptatem rerum placeat repellendus, illum quidem provident ullam impedit eligendi quae assumenda suscipit blanditiis corrupti deserunt quisquam alias laudantium sunt commodi consequuntur! Nulla harum tenetur autem ipsam error ab eligendi? Sunt sint quis est similique, vero distinctio. Nesciunt quae neque eos ea culpa eveniet enim consectetur, saepe provident quasi dolor labore fugit, accusantium deserunt nobis nulla quis esse est fugiat, recusandae optio similique. Ducimus ipsum error vitae, eveniet aperiam labore ab dolorum officiis fugit dolorem corporis animi necessitatibus cupiditate voluptate odit sed reprehenderit deserunt iure explicabo hic id doloremque. Sed rerum nulla, eligendi quos aliquam, error laudantium officiis corrupti, eos dicta quia voluptatem officia animi ut repellat.</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, totam. Fuga eum voluptatem rerum placeat repellendus, illum quidem provident ullam impedit eligendi quae assumenda suscipit blanditiis corrupti deserunt quisquam alias laudantium sunt commodi consequuntur! Nulla harum tenetur autem ipsam error ab eligendi? Sunt sint quis est similique, vero distinctio. Nesciunt quae neque eos ea culpa eveniet enim consectetur, saepe provident quasi dolor labore fugit, accusantium deserunt nobis nulla quis esse est fugiat, recusandae optio similique. Ducimus ipsum error vitae, eveniet aperiam labore ab dolorum officiis fugit dolorem corporis animi necessitatibus cupiditate voluptate odit sed reprehenderit deserunt iure explicabo hic id doloremque. Sed rerum nulla, eligendi quos aliquam, error laudantium officiis corrupti, eos dicta quia voluptatem officia animi ut repellat.</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, totam. Fuga eum voluptatem rerum placeat repellendus, illum quidem provident ullam impedit eligendi quae assumenda suscipit blanditiis corrupti deserunt quisquam alias laudantium sunt commodi consequuntur! Nulla harum tenetur autem ipsam error ab eligendi? Sunt sint quis est similique, vero distinctio. Nesciunt quae neque eos ea culpa eveniet enim consectetur, saepe provident quasi dolor labore fugit, accusantium deserunt nobis nulla quis esse est fugiat, recusandae optio similique. Ducimus ipsum error vitae, eveniet aperiam labore ab dolorum officiis fugit dolorem corporis animi necessitatibus cupiditate voluptate odit sed reprehenderit deserunt iure explicabo hic id doloremque. Sed rerum nulla, eligendi quos aliquam, error laudantium officiis corrupti, eos dicta quia voluptatem officia animi ut repellat.</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, totam. Fuga eum voluptatem rerum placeat repellendus, illum quidem provident ullam impedit eligendi quae assumenda suscipit blanditiis corrupti deserunt quisquam alias laudantium sunt commodi consequuntur! Nulla harum tenetur autem ipsam error ab eligendi? Sunt sint quis est similique, vero distinctio. Nesciunt quae neque eos ea culpa eveniet enim consectetur, saepe provident quasi dolor labore fugit, accusantium deserunt nobis nulla quis esse est fugiat, recusandae optio similique. Ducimus ipsum error vitae, eveniet aperiam labore ab dolorum officiis fugit dolorem corporis animi necessitatibus cupiditate voluptate odit sed reprehenderit deserunt iure explicabo hic id doloremque. Sed rerum nulla, eligendi quos aliquam, error laudantium officiis corrupti, eos dicta quia voluptatem officia animi ut repellat.</p>
        </div>
    </div>
</div> -->

    <div class="container" style="margin-top: 10rem; margin-bottom: 10rem;">
        <div class="row text-center">
            <div class="col-12">
                <h1 style="font-size: 4rem; color: #6D6D6D">COMING SOON</h1>
            </div>
        </div>
    </div>


@endsection
