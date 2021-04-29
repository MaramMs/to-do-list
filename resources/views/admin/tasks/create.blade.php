<x-admin-layout title="Create New Task">
<form action="/admin/tasks" method="POST">
{{ csrf_field()}}
    <div class="form-group">
        <input type="text" name="task" class="form-control" placeholder="Please Enter your Task">
    </div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
    starday
  </label>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
  Sunday
  </label>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
  Monday
  </label>
  </div>

  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
  Tuesday
  </label>
  </div>

  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
  Wednesday
  </label>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
  Thursday
  </label>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
  Friday
  </label>
  </div>


    <div class="form-group">
    <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
</x-admin-layout>
