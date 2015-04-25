
	<h1 class="thin-title article-nav"><?php echo __('Year Archives'); ?></h1>
	<div><input type="text" placeholder="Search Artists" class="full" data-ng-model="search"></div>
	<div>
		<div class="half" data-ng-repeat="year in years| filter:search">
	        <a ng-href="{{year.url}}"><img data-ng-src="{{year.thumb}}"></a>    
	    </div>
	</div>



