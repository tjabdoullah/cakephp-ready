<script src="<?php echo $this->webroot; ?>highcharts-4.0.3/js/highcharts.js"></script>
<script src="<?php echo $this->webroot; ?>highcharts-4.0.3/js/highcharts-3d.js"></script>
<script src="<?php echo $this->webroot; ?>highcharts-4.0.3/js/modules/exporting.js"></script>

<span class="glyphicon glyphicon-heart hide" style="font-size: 350px; text-align: center; display: block;"></span>
<script type="text/javascript">
	$(function () {
	    $('#statistics').highcharts({
	        chart: {
	            type: 'pie',
	            options3d: {
					enabled: true,
	                alpha: 45,
	                beta: 0
	            }
	        },
	        title: {
	            text: 'ATJ consulting'
	        },
	        subtitle: {
	            text: 'Our values'
	        },
	        tooltip: {
	            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
	        },
	        plotOptions: {
	            pie: {
	                allowPointSelect: true,
	                cursor: 'pointer',
	                depth: 35,
	                dataLabels: {
	                    enabled: true,
	                    format: '{point.name}'
	                }
	            }
	        },
            credits: {
                enabled: false
            },
	        series: [{
	            type: 'pie',
	            name: 'Our Values',
	            data: [
					{
	                    name: 'Reliability',
	                    y: 25,
	                    sliced: true,
	                    selected: true
	                },
	                ['Commitment',   25],
	                ['Latest Technologies',    25],
	                ['long term relations',     25]
	            ]
	        }]
	    });
	});
</script>
<div class="row">
	<div class="col-md-6">
		<div class="tabbable tabs-right">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#1" data-toggle="tab">Statistiques</a></li>
				<li><a href="#2" data-toggle="tab">Tableaux de Synthèse</a></li>
				<li><a href="#3" data-toggle="tab">Formulaires</a></li>
				<li><a href="#4" data-toggle="tab">Animation</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="1">
					<div id="statistics" style="width: 65%" class="round"></div>
					<style type="text/css">
						#statistics{
							background-color: #fff;
							padding: 15px;
						}
					</style>
				</div>
				<div class="tab-pane" id="2">
					<table class="table table-striped table-hover" style="width: 65%">
					  <thead>
					    <tr>
					      <th>#</th>
					      <th>Colonne 1</th>
					      <th>Colonne 2</th>
					      <th>Colonne 3</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td>1</td>
					      <td>Contenu</td>
					      <td>Contenu</td>
					      <td>Contenu</td>
					    </tr>
					    <tr>
					      <td>2</td>
					      <td>Contenu</td>
					      <td>Contenu</td>
					      <td>Contenu</td>
					    </tr>
					    <tr class="info">
					      <td>3</td>
					      <td>Contenu</td>
					      <td>Contenu</td>
					      <td>Contenu</td>
					    </tr>
					    <tr class="success">
					      <td>4</td>
					      <td>Contenu</td>
					      <td>Contenu</td>
					      <td>Contenu</td>
					    </tr>
					    <tr class="danger">
					      <td>5</td>
					      <td>Contenu</td>
					      <td>Contenu</td>
					      <td>Contenu</td>
					    </tr>
					    <tr class="warning">
					      <td>6</td>
					      <td>Contenu</td>
					      <td>Contenu</td>
					      <td>Contenu</td>
					    </tr>
					    <tr class="active">
					      <td>7</td>
					      <td>Contenu</td>
					      <td>Contenu</td>
					      <td>Contenu</td>
					    </tr>
					  </tbody>
					</table> 
				</div>
				<div class="tab-pane" id="3">
					<form class="form-horizontal">
					  <fieldset>
					    <legend>Formulaires</legend>
					    <div class="form-group">
					      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
					      <div class="col-lg-10">
					        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
					      </div>
					    </div>
					    <div class="form-group">
					      <label for="textArea" class="col-lg-2 control-label" placeholder="Texte">Texte</label>
					      <div class="col-lg-10">
					        <textarea class="form-control" rows="3" id="textArea"></textarea>
					      </div>
					    </div>
					    <div class="form-group">
					      <label for="select" class="col-lg-2 control-label">Séléction</label>
					      <div class="col-lg-10">
					        <select class="form-control" id="select">
					          <option>Option 1</option>
					          <option>Option 2</option>
					          <option>Option 3</option>
					          <option>Option 4</option>
					          <option>Option 5</option>
					        </select>
					      </div>
					    </div>
					    <div class="form-group">
					      <div class="col-lg-10 col-lg-offset-2">
					        <button class="btn btn-default">Annuler</button>
					        <button type="submit" class="btn btn-primary">Valider</button>
					      </div>
					    </div>
					  </fieldset>
					</form>
				</div>
				<div class="tab-pane" id="4">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width: 65%;">
					      <ol class="carousel-indicators">
					        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
					        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
					      </ol>
					      <div class="carousel-inner">
					        <div class="item active">
					          <img src="http://lorempixel.com/400/200/sports/">
					        </div>
					        <div class="item">
					          <img src="http://lorempixel.com/400/200/animals/">
					        </div>
					        <div class="item">
					          <img src="http://lorempixel.com/400/200/food/">
					        </div>
					      </div>
					      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					        <span class="glyphicon glyphicon-chevron-left"></span>
					      </a>
					      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					        <span class="glyphicon glyphicon-chevron-right"></span>
					      </a>
					    </div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="tabbable tabs-right">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#101" data-toggle="tab">Cartes</a></li>
				<li><a href="#102" data-toggle="tab">Ergonomie</a></li>
				<li><a href="#103" data-toggle="tab">Compact</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="101">
					<div id="map_canvas"></div>
					<style type="text/css">
					  #map_canvas { height: 394px; }
					  #map_canvas img { max-width: none; }
					  .bold{
					  	font-weight: bold;
					  }
					</style>
					<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrWd5vmLqqBvY9WrVAHonAsHS1foIjQKA&sensor=false">
					</script>
					<script type="text/javascript">
						var map;
						var marker = new google.maps.Marker();
						var image = '<?php echo $this->webroot; ?>img/da_marker.png';
						var you_are_here_image = '<?php echo $this->webroot; ?>img/you_are_here.png';
						function initialize() {
							var mapOptions = {
								zoom: 12,
								center: new google.maps.LatLng(33.533333,-7.583333)
							};
							map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
							if (navigator.geolocation)
							{
								navigator.geolocation.getCurrentPosition(showPosition);
							}
							else
							{
								console.log("Geolocation is not supported by this browser.");
							}
							google.maps.event.addListener(map, 'click', function(e) {
								placeMarker(e.latLng, map);
							});
						}
						google.maps.event.addDomListener(window, 'load', initialize);
						function placeMarker(position, map) {
							console.log("Place marker triggered");
							marker.setMap(null);
							marker = new google.maps.Marker({
								position: position,
								map: map,
								icon: image
							});
							console.log(position.lat() + '/' + position.lng());
							$('#AgencyLat').val(position.lat());
							$('#AgencyLong').val(position.lng());
							//map.panTo(position);
						}
					</script>
					<script>
						function getLocation()
						{
							if (navigator.geolocation)
							{
								navigator.geolocation.getCurrentPosition(showPosition);
							}
							else
							{
								console.log("Geolocation is not supported by this browser.");
							}
						}
						function showPosition(position)
						{
							var current_location_position = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
							var mapOptions = {
								zoom: 12,
								center: new google.maps.LatLng(position.coords.latitude, position.coords.longitude),
								draggableCursor: "url('<?php echo $this->webroot; ?>img/dot.png'), crosshair",
							};
							map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
							var you_are_here_marker = new google.maps.Marker({
								position: current_location_position,
								map: map,
								icon: you_are_here_image
							});
							google.maps.event.addListener(map, 'click', function(e) {
								placeMarker(e.latLng, map);
							});
							console.log("Latitude: " + position.coords.latitude + " Longitude: " + position.coords.longitude);
						}
					</script>
				</div>
				<div class="tab-pane" id="102">
					<div class="progress progress-striped">
					  <div class="progress-bar progress-bar-info" style="width: 20%"></div>
					</div>

					<div class="progress progress-striped">
					  <div class="progress-bar progress-bar-success" style="width: 40%"></div>
					</div>

					<div class="progress progress-striped">
					  <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
					</div>

					<div class="progress progress-striped">
					  <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
					</div>

					<div class="progress progress-striped active">
					  <div class="progress-bar" style="width: 45%"></div>
					</div>

					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title">Bloc (Danger)</h3>
					  </div>
					  <div class="panel-body">
					    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					  </div>
					</div>

					<div class="panel panel-success">
					  <div class="panel-heading">
					    <h3 class="panel-title">Bloc (Succès)</h3>
					  </div>
					  <div class="panel-body">
					    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					  </div>
					</div>

					<div class="panel panel-warning">
					  <div class="panel-heading">
					    <h3 class="panel-title">Bloc (Attention)</h3>
					  </div>
					  <div class="panel-body">
					    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					  </div>
					</div>
				</div>
				<div class="tab-pane" id="103">
					<!-- Button trigger modal -->
					<button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">
					  Plus d' <span class="glyphicon glyphicon-info-sign"></span>
					</button>

					<!-- Modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					        <h4 class="modal-title" id="myModalLabel">Informations</h4>
					      </div>
					      <div class="modal-body">
					        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
					        <button type="button" class="btn btn-primary">Valider</button>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>