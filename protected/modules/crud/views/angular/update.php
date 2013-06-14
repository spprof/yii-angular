<form name="pageForm">

  <div class="control-group" ng-class="{error: pageForm.label.$invalid}">
    <label>Заголовок</label>
    <input type="text" name="label" ng-model="item.label" required>
    <span ng-show="pageForm.label.$error.required" class="help-inline">Required</span>
  </div>
  
  <div class="control-group" ng-class="{error: pageForm.label.$invalid}">
    <label>Содержание</label>
    <textarea name="text" ng-model="item.text"></textarea>
  </div>
 
  <br>
  <a href="#/" class="btn">Отмена</a>
  <button ng-click="save()" ng-disabled="isClean() || pageForm.$invalid"
          class="btn btn-primary">Сохранить</button>
  <button ng-click="destroy()"
          ng-show="item.id" class="btn btn-danger">Удалить</button>
</form>