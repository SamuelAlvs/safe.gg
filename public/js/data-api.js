function get_match_data(id) {
    $.ajax({
        type: 'GET',
        url: `/api/user/${id}/get_history`,
        dataType: 'json',
        success: function (data) {
            console.log(data);
            localStorage.setItem('match-history', JSON.stringify(data));
            // $.each(data.player_matchs_info, function (i, match) {
            //     $('.feed-body').append(`<div class="card card-feed shadow-sm ${match.win ? 'card-win' : 'card-lose'} white-font"><div class="card-body" style="padding: 0.5rem !important"> <div class="col-md-12"> <div class="row"><span>${match.queue}</span><div class="my-auto circle-card"> <i class="fas fa-circle fa-xs"></i> </div><small class="span-card my-auto"> ${match.gameDuration} </small></div> <hr style="width:100%; margin-bottom: 10px;"> <div class="row"> <div class="col-md-3 my-auto"> <div class="row"> <img class="img-champion img-fluid rounded-circle mx-auto" src="/images/squares/${match.championName}.png"> </div> <div class="row"><p class="text-center mx-auto">Level ${match.champLevel}</p></div> </div> <div class="col-md-2 my-auto"> <div class="row"><img class="img-spell img-fluid" src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/spell/Summoner${match.spell1}.png"> <img class="img-perk img-fluid" src="https://opgg-static.akamaized.net/images/lol/perk/${match.runa1}.png"></div> <div class="row"> <img class="img-spell img-fluid" src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/spell/Summoner${match.spell2}.png"> <img class="img-perk img-fluid" src="https://opgg-static.akamaized.net/images/lol/perkStyle/${match.runa2}.png"> </div></div> <div class="col-md-2 my-auto"> <div class="row"> <span>${match.kills}<small class="card-bars">/</small><span style="color: #a7a7a7;">${match.deaths}</span><small class="card-bars">/</small>${match.assists}</span> </div><div class="row"> <span>${match.kda} <small class="span-card">KDA</small></span> </div><div class="row"> <span>${match.totalMinionsKilled}<small class="span-card" data-tooltip="Minions por minuto" data-tooltip-position="bottom">(${(match.totalMinionsKilled / (match.gameDurationSec / 60)).toFixed(1)}) CS</small></span> </div> </div><div class="col-md-2 my-auto"> <div class="row"> ${match.item0 ? `<img class="img-fluid item-card" src="https://opgg-static.akamaized.net/images/lol/item/${match.item0}.png"></img>` : ``} ${match.item1 ? `<img class="img-fluid item-card" src="https://opgg-static.akamaized.net/images/lol/item/${match.item1}.png"></img>` : ``} ${match.item2 ? `<img class="img-fluid item-card" src="https://opgg-static.akamaized.net/images/lol/item/${match.item2}.png"></img>` : ``} </div> <div class="row"> ${match.item3 ? `<img class="img-fluid item-card" src="https://opgg-static.akamaized.net/images/lol/item/${match.item3}.png"></img>` : ``} ${match.item4 ? `<img class="img-fluid item-card" src="https://opgg-static.akamaized.net/images/lol/item/${match.item4}.png"></img>` : ``} ${match.item5 ? `<img class="img-fluid item-card" src="https://opgg-static.akamaized.net/images/lol/item/${match.item5}.png"></img>` : ``} </div> </div></div> </div> </div> </div>`);
            // });
            // $('#loader').remove();
        },
        error: function () {
            // $('#loader').remove();
        }
    });
}

function get_match_data_async(id) {
    $.ajax({
        type: 'GET',
        url: `/api/user/${id}/history`,
        async: false,
        dataType: 'json',
        success: function (data) {
            localStorage.setItem('match-history', JSON.stringify(data));
            $.each(data.player_matchs_info, function (i, match) {
                $('.feed-body').append(`<div class="card card-feed shadow-sm ${match.win ? 'card-win' : 'card-lose'} white-font"><div class="card-body" style="padding: 0.5rem !important"> <div class="col-md-12"> <div class="row"><span>${match.queue}</span><div class="my-auto circle-card"> <i class="fas fa-circle fa-xs"></i> </div><small class="span-card my-auto"> ${match.gameDuration} </small></div> <hr style="width:100%; margin-bottom: 10px;"> <div class="row"> <div class="col-md-3 my-auto"> <div class="row"> <img class="img-champion img-fluid rounded-circle mx-auto" src="/images/squares/${match.championName}.png"> </div> <div class="row"><p class="text-center mx-auto">Level ${match.champLevel}</p></div> </div> <div class="col-md-2 my-auto"> <div class="row"><img class="img-spell img-fluid" src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/spell/Summoner${match.spell1}.png"> <img class="img-perk img-fluid" src="https://opgg-static.akamaized.net/images/lol/perk/${match.runa1}.png"></div> <div class="row"> <img class="img-spell img-fluid" src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/spell/Summoner${match.spell2}.png"> <img class="img-perk img-fluid" src="https://opgg-static.akamaized.net/images/lol/perkStyle/${match.runa2}.png"> </div></div> <div class="col-md-2 my-auto"> <div class="row"> <span>${match.kills}<small class="card-bars">/</small><span style="color: #a7a7a7;">${match.deaths}</span><small class="card-bars">/</small>${match.assists}</span> </div><div class="row"> <span>${match.kda} <small class="span-card">KDA</small></span> </div><div class="row"> <span>${match.totalMinionsKilled}<small class="span-card" data-tooltip="Minions por minuto" data-tooltip-position="bottom">(${(match.totalMinionsKilled / (match.gameDurationSec / 60)).toFixed(1)}) CS</small></span> </div> </div><div class="col-md-2 my-auto"> <div class="row"> ${match.item0 ? `<img class="img-fluid item-card" src="https://opgg-static.akamaized.net/images/lol/item/${match.item0}.png"></img>` : ``} ${match.item1 ? `<img class="img-fluid item-card" src="https://opgg-static.akamaized.net/images/lol/item/${match.item1}.png"></img>` : ``} ${match.item2 ? `<img class="img-fluid item-card" src="https://opgg-static.akamaized.net/images/lol/item/${match.item2}.png"></img>` : ``} </div> <div class="row"> ${match.item3 ? `<img class="img-fluid item-card" src="https://opgg-static.akamaized.net/images/lol/item/${match.item3}.png"></img>` : ``} ${match.item4 ? `<img class="img-fluid item-card" src="https://opgg-static.akamaized.net/images/lol/item/${match.item4}.png"></img>` : ``} ${match.item5 ? `<img class="img-fluid item-card" src="https://opgg-static.akamaized.net/images/lol/item/${match.item5}.png"></img>` : ``} </div> </div></div> </div> </div> </div>`);
            });
            $('#loader').remove();
        },
        error: function () {
            $('#loader').remove();
            // $('#loader').remove();
        }
    });
}

function get_rank_data(id) {
    $.ajax({
        type: 'GET',
        url: `/api/user/${id}/rank`,
        dataType: 'json',
        success: function (data) {
            localStorage.setItem('ranks', JSON.stringify(data));
        },
        error: function () {

        }
    });
}

function get_rank_data_feed(id) {
    $.ajax({
        type: 'GET',
        url: `/api/user/${id}/rank`,
        dataType: 'json',
        success: function (data) {
            $('.rank').html("");
            $.each(data, function (i, ranked) {
                $('.rank').append(`<div class="card bg-dark card-lol-info">
                    <div class="card-body">
                        <div class="card-title">
                            <span class="ranked-title white-font">${ranked.queueType.replace('_', ' ').replace('_', ' ')}</span>
                            <hr class="line-margin">
                            <div class="row">
                                <div class="col-md-6 text-center my-auto">
                                    <img id="flex-ranked-img" src="images/elobadge/${ranked.tier}.png" class="rank-img">
                                </div>
                                <div class="col-md-6 my-auto">
                                    <div class="row">
                                        <span class="rank-text white-font" id="flex-ranked">${ranked.tier} ${ranked.rank}</span>
                                    </div>
                                    <div class="row">
                                        <span class="second-stats gray-font" id="flex-win-defeat">${ranked.wins}V ${ranked.losses}D - ${Math.ceil(((ranked.wins / (ranked.wins + ranked.losses)) * 100))} % </span>
                                    </div>
                                    <div class="row">
                                        <span class="second-stats gray-font" id="flex-winrate"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="card-text user-bio"></p>
                    </div>
                    </div>`);
            });
        },
        error: function () {

        }
    });
}

function follow_game(id_game, button) {
    var user = JSON.parse(localStorage.getItem('user'));
    button.addClass('running');
    $.ajax({
        type: 'GET',
        url: `/api/game/${user.id}/follow/${id_game}`,
        dataType: 'json',
        success: function (data) {
            if (data.message == "Success") {
                setTimeout(function () {
                    button.removeClass('running');
                    button.html('Seguindo <div class="ld ld-ring ld-spin-fast"></div>');
                    button.removeClass('btn-follow');
                    button.addClass('btn-following');
                }, 500);
                button.attr('onclick', `unfollow_game(${id_game}, $(this))`);
            }
        },
        error: function () {

        }
    });
}

function unfollow_game(id_game, button) {
    var user = JSON.parse(localStorage.getItem('user'));
    button.addClass('running');
    $.ajax({
        type: 'GET',
        url: `/api/game/${user.id}/unfollow/${id_game}`,
        dataType: 'json',
        success: function (data) {
            if (data.message == "Success") {
                setTimeout(function () {
                    button.removeClass('running');
                    button.html('Seguir <div class="ld ld-ring ld-spin-fast"></div>');
                    button.removeClass('btn-following');
                    button.addClass('btn-follow');
                }, 500);
                button.attr('onclick', `follow_game(${id_game}, $(this))`);
            }
        },
        error: function () {

        }
    });
}


function follow_user(id_followed, button) {
    var user = JSON.parse(localStorage.getItem('user'));
    button.addClass('running');
    $.ajax({
        type: 'GET',
        url: `/api/user/${user.id}/follow/${id_followed}`,
        dataType: 'json',
        success: function (data) {
            if (data.message == "Success") {
                setTimeout(function () {
                    button.removeClass('running');
                    button.html('Seguindo <div class="ld ld-ring ld-spin-fast"></div>');
                    button.removeClass('btn-following');
                    button.addClass('btn-follow');
                }, 500);
                button.attr('onclick', `unfollow_user(${id_followed}, $(this))`);
            }
        },
        error: function () {

        }
    });
}

function unfollow_user(id_followed, button) {
    var user = JSON.parse(localStorage.getItem('user'));
    button.addClass('running');
    $.ajax({
        type: 'GET',
        url: `/api/user/${user.id}/unfollow/${id_followed}`,
        dataType: 'json',
        success: function (data) {
            if (data.message == "Success") {
                setTimeout(function () {
                    button.removeClass('running');
                    button.html('Seguir <div class="ld ld-ring ld-spin-fast"></div>');
                    button.removeClass('btn-follow');
                    button.addClass('btn-following');
                }, 500);
                button.attr('onclick', `follow_user(${id_followed}, $(this))`);
            }
        },
        error: function () {

        }
    });
}

function get_feed_data(id) {
    $.ajax({
        type: 'GET',
        url: `/api/user/${id}/feed`,
        dataType: 'json',
        success: function (data) {
            var monthNames = [
                "Janeiro", "Fevereiro", "Março",
                "Abril", "Maio", "Junho", "Julho",
                "Agosto", "Setembro", "Outubro",
                "Novembro", "Dezembro"
            ];
            //acrescenta tudo pra um array auxiliar
            var feedarray = []
            $.each(data.news.data, function (i, news) {
                feedarray.push(news);
            });
            $.each(data.posts.data, function (i, post) {
                feedarray.push(post);
            });
            $.each(data.followed_users.data, function (i, followed_users) {
                feedarray.push(followed_users);
            });
            //shuffle no array pra ficar intercalado
            console.log(feedarray);
            feedarray.sort(function () {
                return 0.5 - Math.random()
            });
            //percorre o array verificando se é post de usuario, noticia ou partida
            if (feedarray.length > 0) {
                $.each(feedarray, function (i, item) {
                    if (item.post) {
                        var diamesano = item.created_at.split(' ')[0];
                        var mes = diamesano.split('-')[1];
                        var dia = diamesano.split('-')[2];
                        var ano = diamesano.split('-')[0];
                        $('.feed-body').append(`
                        <div class="row">
                            <div class="col-md-12 white-font">
                                  <div class="card-header news-card-text">
                                    ${item.name} - <a href="user/${item.id}">@${item.username}</a>
                                  </div>
                                  <div class="card-body news-card-text text-center">
                                    <div class="row">
                                        <div class="col-md-3 text-center">
                                            <img style="width:30%" class="img-fluid rounded" src="/storage/${item.icon}" alt="user image">
                                        </div>
                                        <div class="col-md-9 text-left my-auto">
                                            <p class="text-left card-text">${item.post}</p>
                                        </div>
                                  </div>
                                <div class="card-footer text-muted text-center news-card-text">
                                    <div class="row">
                                    <div class="col-md-7 text-right">
                                    <a><i onclick="${$.inArray(item.post_id, data.liked_posts) == -1 ? `like_post(${item.post_id}, $(this))" class="far fa-heart "` : `unlike_post(${item.post_id}, $(this))" class="fas fa-heart" style="color: #d64343"`}></i></a><span id="post-${item.post_id}" class="qtd-like"> ${item.num_likes}</span>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <a onclick="open_modal(${item.post_id})"><i class="far fa-comment"></i> <span class="qtd-comment"> ${item.num_comments}</span></a>
                                    </div>
                                    <div class="col-md-3 text-right">
                                    ${dia} ${monthNames[parseInt(mes)-1]} ${ano}
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>`);
                    } else if (item.author) {
                        $('.feed-body').append(`
                        <div class="row">
                            <div class="col-md-12 white-font">
                                <div class="card news-card" style="background-image:url('${item.img}')">
                                  <div class="card-header news-card-text">
                                    ${item.tag}
                                  </div>
                                  <div class="card-body text-center news-card-text">
                                    <h5 class="card-title">${item.title}</h5>
                                    <p class="card-text">${item.body}</p>
                                    <a href="${item.link}" target="_blank" class="btn btn-primary">Leia Mais</a>
                                  </div>
                                  <div class="card-footer text-muted text-right news-card-text">
                                    ${item.author} - ${item.date}
                                  </div>
                                </div>
                            </div>
                        </div>`);
                    } else if (item.summonerName) {
                        $('.feed-body').append(`
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="loader-${item.id}">
                                        <div class="ph-item bg-dark" style="width: 60%"> 
                                            <div class="ph-col-12">
                                                <div class="ph-row">
                                                  <div class="ph-col-4"></div>
                                                </div>
                                                <div class="ph-row">
                                                  <div class="ph-col-4 big"></div>
                                                </div>
                                            </div>
                                            <div class="ph-col-2">
                                                <div class="ph-avatar"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="${item.id}"></div>
                                </div>
                            </div>`);
                        get_one_match(item.id, item.summonerName, item.username);
                    }
                });
            } else {
                $('.feed-body').append('<br><h4 class="white-font text-center">Você ainda não segue nada, siga algum jogo para visualizar as noticias</h4><br>');
            }

            //get_rank_data_feed(id);
        },
        error: function () {
            // $('#loader').remove();
        }
    });
}

function get_one_match(id_followed, summonerName, username) {
    $.ajax({
        type: 'GET',
        url: `/api/user/${id_followed}/one_match`,
        dataType: 'json',
        success: function (data) {
            $(`#loader-${id_followed}`).remove();
            $(`#${id_followed}`).html(`<div class="card card-feed shadow-sm ${data[0].win ? 'card-win' : 'card-lose'} white-font"><div class="card-body" style="padding: 0.5rem !important"> <div class="col-md-12"> <div class="row"><small class="text-right span-card my-auto">Ultima partida de ${summonerName} - <a href="user/${id_followed}">@${username}</a></small></div> <div class="row"><span>${data[0].queue}</span><div class="my-auto circle-card"> <i class="fas fa-circle fa-xs"></i> </div><small class="span-card my-auto"> ${data[0].gameDuration} - ${data[0].win ? 'Vitoria' : 'Derrota'}</small></div> <hr style="width:100%; margin-bottom: 10px;"> <div class="row"> <div class="col-md-3 my-auto"> <div class="row"> <img class="img-champion img-fluid rounded-circle mx-auto" src="/images/squares/${data[0].championName}.png"> </div> <div class="row"><p class="text-center mx-auto">Level ${data[0].champLevel}</p></div> </div> <div class="col-md-2 my-auto"> <div class="row"><img class="img-spell img-fluid" src="/images/spell/Summoner${data[0].spell1}.png"> <img class="img-perk img-fluid" src="https://opgg-static.akamaized.net/images/lol/perk/${data[0].runa1}.png"></div> <div class="row"> <img class="img-spell img-fluid" src="/images/spell/Summoner${data[0].spell2}.png"> <img class="img-perk img-fluid" src="https://opgg-static.akamaized.net/images/lol/perkStyle/${data[0].runa2}.png"> </div></div> <div class="col-md-2 my-auto"> <div class="row"> <span>${data[0].kills}<small class="card-bars">/</small><span style="color: #a7a7a7;">${data[0].deaths}</span><small class="card-bars">/</small>${data[0].assists}</span> </div><div class="row"> <span>${data[0].kda} <small class="span-card">KDA</small></span> </div><div class="row"> <span>${data[0].totalMinionsKilled}<small class="span-card" data-tooltip="Minions por minuto" data-tooltip-position="bottom">(${(data[0].totalMinionsKilled / (data[0].gameDurationSec / 60)).toFixed(1)}) CS</small></span> </div> </div><div class="col-md-2 my-auto"> <div class="row"> ${data[0].item0 ? `<img class="img-fluid item-card" src="/images/items/${data[0].item0}.png"></img>` : ``} ${data[0].item1 ? `<img class="img-fluid item-card" src="/images/items/${data[0].item1}.png"></img>` : ``} ${data[0].item2 ? `<img class="img-fluid item-card" src="/images/items/${data[0].item2}.png"></img>` : ``} </div> <div class="row"> ${data[0].item3 ? `<img class="img-fluid item-card" src="/images/items/${data[0].item3}.png"></img>` : ``} ${data[0].item4 ? `<img class="img-fluid item-card" src="/images/items/${data[0].item4}.png"></img>` : ``} ${data[0].item5 ? `<img class="img-fluid item-card" src="/images/items/${data[0].item5}.png"></img>` : ``} </div> </div></div> </div> </div> </div>`);
        },
        error: function () {
            $(`#loader-${id_followed}`).remove();
        }
    });
};

function comment(id_post) {
    now = new Date;
    var monthNames = [
        "Jan", "Fev", "Mar",
        "Abr", "Maio", "Jun", "Jul",
        "Ago", "Set", "Out",
        "Nov", "Dez"
    ];
    var text = $('#comentario').val();
    var user = JSON.parse(localStorage.getItem('user'));
    var json = {
        user_id: user.id,
        post_id: id_post,
        comment: text
    }
    $.ajax({
        type: 'POST',
        url: `/api/post/comment`,
        contentType: 'application/json',
        data: JSON.stringify(json),
        dataType: 'json',
        success: function (data) {
            if (data.message == "Success") {
                $('#modal-comments').prepend(`
                <div id="postednow shadow-none" class="card card-comment" style="border: none; display: none">
                <div class="card-header" style="border: none" style="background-color: #dee2e6">
                  <a class="user-nick" href="user/${user.id}">${user.name}</a> <span class="text-muted">@${user.username} - ${now.getDate()} ${monthNames[now.getMonth()]}</span>
                </div>
                <div class="card-body text-center">
                  <div class="row">
                      <div class="col-md-3 text-center">
                          <img style="width:65%" class="img-fluid rounded" src="/storage/${user.icon}" alt="user image">
                      </div>
                      <div class="col-md-9 text-left my-auto">
                          <p class="text-left card-text black-font">${text}</p>
                      </div>
                  </div>
                </div>
            </div>`);
                $("#postednow").fadeIn('slow');
                $('#comentario').val('');
            }
        },
        error: function () {}
    });
}

function open_modal(post_id) {
    var monthNames = [
        "Jan", "Fev", "Mar",
        "Abr", "Maio", "Jun", "Jul",
        "Ago", "Set", "Out",
        "Nov", "Dez"
    ];
    $('#modal').modal('show');
    $.ajax({
        type: 'GET',
        url: `/api/post/${post_id}/modal`,
        dataType: 'json',
        success: function (data) {
            $(`#modal-title`).html(`Post de ${data.post_info[0].username} - <a href="user/${data.post_info[0].id}">@${data.post_info[0].username}</a>`);
            $('#modal-post').html(data.post_info[0].post);
            $('#modal-img').attr('src', `/storage/${data.post_info[0].icon}`);
            $('#btn-comentar').attr('onClick', `comment(${post_id})`);
            $.each(data.comments, function (i, item) {
                var diamesano = item.created_at.split(' ')[0];
                var mes = diamesano.split('-')[1];
                var dia = diamesano.split('-')[2];
                $(`#modal-comments`).append(`
                        <div class="card card-comment shadow-none" style="border: none">
                            <div class="card-header" style="border: none" style="background-color: #dee2e6">
                              <a class="user-nick" href="user/${item.id}">${item.name}</a> <span class="text-muted">@${item.username} - ${dia} ${monthNames[parseInt(mes)-1]}</span>
                            </div>
                            <div class="card-body text-center">
                              <div class="row">
                                  <div class="col-md-3 text-center">
                                      <img style="width:65%" class="img-fluid rounded" src="/storage/${item.icon}" alt="user image">
                                  </div>
                                  <div class="col-md-9 text-left my-auto">
                                      <p class="text-left card-text black-font">${item.comment}</p>
                                  </div>
                              </div>
                            </div>
                        </div>`);
            });
        },
        error: function () {}
    });
}
