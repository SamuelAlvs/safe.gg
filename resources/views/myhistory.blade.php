<!DOCTYPE html>
<html>

<head>
	@include('lib.head')
	<link rel='stylesheet' type='text/css' href='/css/main.css'>
	<link rel='stylesheet' type='text/css' href='/css/feed.css'>
	<link rel='stylesheet' type='text/css' href='/css/navbar.css'>
	<link rel='stylesheet' type='text/css' href='/css/loader.css'>
	<script src="/js/data-api.js"></script>
	<!-- <script>$(document).ready(function(){
            $('#loading_wrap').remove();
        });
    </script> -->
</head>

<body>
	@include('lib.navbar')

	<!-- <div class="d-flex justify-content-center my-auto" id="loading_wrap" style="z-index: 99999999; position: fixed; overflow: hidden; background-color: black; width: 100%; height: 100%; top: 0; left: 0; opacity: 0.998;">
	  <div class="loader my-auto" role="status">
	    <span class="sr-only">Loading...</span>
	  </div>
	</div> -->

	<!-- Icone Crop  -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Escolha seu Icone</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="post" action="/user/icon">
					{{ csrf_field() }}
					<div class="modal-body">
						<!--Crop-->
						<div class="image-editor">
							<input type="file" class="cropit-image-input">
							<div class="cropit-preview"></div>
							<div class="row">
								<input type="range" class="cropit-image-zoom-input slider mx-auto">
							</div>
							<input type="hidden" name="fileToUpload" id="fileToUpload" class="hidden-image-data"
								required>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
						<button type="submit" id="icon-button" class="btn btn-primary export">Salvar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!---->
	<div class="container">
		<div class="row">
			<div class="col-md-3" style="padding-right: 8px;">
				<div class="card bg-dark">
					<div class="row photo-card"
						style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('storage/'.$user->icon) }}); background-size: cover;background-repeat: no-repeat;background-position: center;">
						<div class="col-md-12">
							<div class="row pt-2 justify-content-end">
								<a href="/perfil"><i class="fas fa-ellipsis-v edit-icon"></i></a>
							</div>
							<div class="row h-75 align-items-end pt-2">
								<div class="col-md-8">
									<div class="row">
										<span class="white-font text-uppercase font-weight-bold"
											style="text-shadow: 0 0 15px rgba(0,0,0,.8), 0 0 10px rgba(0,0,0,.8);">{{$user->name}}</span>
									</div>
									<div class="row">
										<span class="font-username gray-light-font">{{'@'.$user->username}} </span>
									</div>

								</div>

							</div>
						</div>

					</div>
					<div class="row align-items-center info-user-card">
						<div class="col-md-4 border-right border-gray">
							<div class="row justify-content-center">
								<span class="green-font font-big">4</span>
							</div>
							<div class="row justify-content-center">
								<span class="gray-light-font font-small">POSTS</span>
							</div>
						</div>
						<div class="col-md-4 border-right border-gray">
							<div class="row justify-content-center">
								<span class="green-font font-big">2</span>
							</div>
							<div class="row justify-content-center">
								<span class="gray-light-font font-small">SEGUIDORES</span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="row justify-content-center">
								<span class="green-font font-big">3</span>
							</div>
							<div class="row justify-content-center">
								<span class="gray-light-font font-small">SEGUINDO</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-9" style="padding-left: 0px;">
				<div class="card  bg-dark feed-body" style="height: 100%;">
					<!--loader-->
					<div id="loader" class="row" style="height:500px;">
						<div class="lds-ripple my-auto mx-auto">
							<div></div>
							<div></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script>
	var matches = JSON.parse(localStorage.getItem('match-history'));
	if (!matches) {
		get_match_data_async({{ $user-> id}})
	}else {
		$.each(matches.player_matchs_info, function (i, match) {
			$('.feed-body').append(`<div class="card card-feed shadow-sm ${match.win ? 'card-win' : 'card-lose'} white-font"><div class="card-body" style="padding: 0.5rem !important"> <div class="col-md-12"> <div class="row"><span>${match.queue}</span><div class="my-auto circle-card"> <i class="fas fa-circle fa-xs"></i> </div><small class="span-card my-auto"> ${match.gameDuration} </small></div> <hr style="width:100%; margin-bottom: 10px;"> <div class="row"> <div class="col-md-3 my-auto"> <div class="row"> <img class="img-champion img-fluid rounded-circle mx-auto" src="/images/squares/${match.championName}.png"> </div> <div class="row"><p class="text-center mx-auto">Level ${match.champLevel}</p></div> </div> <div class="col-md-2 my-auto"> <div class="row"><img class="img-spell img-fluid" src="/images/spell/Summoner${match.spell1}.png"> <img class="img-perk img-fluid" src="https://opgg-static.akamaized.net/images/lol/perk/${match.runa1}.png"></div> <div class="row"> <img class="img-spell img-fluid" src="/images/spell/Summoner${match.spell2}.png"> <img class="img-perk img-fluid" src="https://opgg-static.akamaized.net/images/lol/perkStyle/${match.runa2}.png"> </div></div> <div class="col-md-2 my-auto"> <div class="row"> <span>${match.kills}<small class="card-bars">/</small><span style="color: #a7a7a7;">${match.deaths}</span><small class="card-bars">/</small>${match.assists}</span> </div><div class="row"> <span>${match.kda} <small class="span-card">KDA</small></span> </div><div class="row"> <span>${match.totalMinionsKilled}<small class="span-card" data-tooltip="Minions por minuto" data-tooltip-position="bottom">(${(match.totalMinionsKilled / (match.gameDurationSec / 60)).toFixed(1)}) CS</small></span> </div> </div><div class="col-md-2 my-auto"> <div class="row"> ${match.item0 ? `<img class="img-fluid item-card" src="/images/items/${match.item0}.png"></img>` : ``} ${match.item1 ? `<img class="img-fluid item-card" src="/images/items/${match.item1}.png"></img>` : ``} ${match.item2 ? `<img class="img-fluid item-card" src="/images/items/${match.item2}.png"></img>` : ``} </div> <div class="row"> ${match.item3 ? `<img class="img-fluid item-card" src="/images/items/${match.item3}.png"></img>` : ``} ${match.item4 ? `<img class="img-fluid item-card" src="/images/items/${match.item4}.png"></img>` : ``} ${match.item5 ? `<img class="img-fluid item-card" src="/images/items/${match.item5}.png"></img>` : ``} </div> </div></div> </div> </div> </div>`);
		});
		$('#loader').remove();
	}

</script>

</html>