<!DOCTYPE html>
<html>
<head>
    @include('lib.head')
  	<link rel='stylesheet' type='text/css' href='/css/navbar.css'>
  	<link rel='stylesheet' type='text/css' href='/css/loading.css'>
  	<link rel='stylesheet' type='text/css' href='/css/loading-btn.css'>
  	<link rel='stylesheet' type='text/css' href='/css/feed.css'>
    <script src="/js/data-api.js"></script>
</head>
<body>
	@include('lib.navbar');
	<div class="container">
		<div class="row">
			<div class="col-md-12">
                @if (count($users)>0)
                    <div class="card bg-dark feed-body" style="height: 100%;">
                        @foreach ($users as $user)
                            <div class="card card-feed shadow-sm bg-dark white-font">
                                <div class="card-body" style="padding: 0.5rem !important">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img class="player-img" src={{ asset('storage/'.$user->icon) }} style="width: 50%;">
                                        </div>
                                        <div class="col-md-6 my-auto">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5 class="text-uppercase"><strong>{{$user->username}}</strong></h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="text-left">LOL: </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="text-right">{{$user->summonerName}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="text-left">Steam: </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="text-right">{{$user->steam}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 my-auto">
                                            @if (in_array($user->id, $followed_users))
                                            <a onclick="unfollow_user({{$user->id}}, $(this))" 
                                                class="btn btn-outline-primary btn-follow ld-ext-right">Seguindo<div class="ld ld-ring ld-spin-fast"></div></a>
                                            @else
                                            <a onclick="follow_user({{$user->id}}, $(this))"
                                                class="btn btn-outline-primary btn-following ld-ext-right">Seguir<div class="ld ld-ring ld-spin-fast"></div></a>
                                            @endif
                                            <a style="margin-top: 5px;" href="/user/{{$user->id}}" class="btn btn-outline-primary btn-following">Perfil</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <h3 class="white-font text-center">Nenhum usuário encontrado</h3>
                @endif
		</div>
	</div>
</body>
</html>
