<span>List of items</span>
<table>
	<tr ng-repeat="item in items" class="thumbnail">
		<td><a href="#/crud/angular/{{item.id}}">{{item.label}}</a></td>
		<td><a href="#/crud/angular/update/{{item.id}}">Изменить</a></td>
		<td><a href="#/crud/angular/remove/{{item.id}}">Удалить</a></td>
	</tr>
</table>