<span>List of items</span>
<ul class="items">
	<li ng-repeat="item in items" class="thumbnail">
		<a href="#/crud/angular/{{item.id}}">{{item.label}}</a>
	</li>
</ul>