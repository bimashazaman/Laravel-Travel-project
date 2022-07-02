@extends('Backend.Admin.AdminHome')
@section('admin-content')


<div class="page-wrapper">
    <div class="content container-fluid">

    <div class="page-header">
    <div class="row">
    <div class="col-sm-12">
    <h3 class="page-title">Basic Inputs</h3>
    <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active">Basic Inputs</li>
    </ul>
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-sm-12">
    <div class="card">
    <div class="card-header">
    <h4 class="card-title">Basic Inputs</h4>
    </div>
    <div class="card-body">
    <form action="#">
    <div class="form-group row">
    <label class="col-form-label col-md-2">Text Input</label>
    <div class="col-md-10">
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="form-group row">
    <label class="col-form-label col-md-2">Password</label>
    <div class="col-md-10">
    <input type="password" class="form-control">
    </div>
    </div>
    <div class="form-group row">
    <label class="col-form-label col-md-2">Disabled Input</label>
    <div class="col-md-10">
    <input type="text" class="form-control" disabled="disabled">
    </div>
    </div>
    <div class="form-group row">
    <label class="col-form-label col-md-2">Readonly Input</label>
    <div class="col-md-10">
    <input type="text" class="form-control" value="readonly" readonly="readonly">
    </div>
    </div>
    <div class="form-group row">
    <label class="col-form-label col-md-2">Placeholder</label>
    <div class="col-md-10">
    <input type="text" class="form-control" placeholder="Placeholder">
    </div>
    </div>
    <div class="form-group row">
    <label class="col-form-label col-md-2">File Input</label>
    <div class="col-md-10">
    <input class="form-control" type="file">
    </div>
    </div>
    <div class="form-group row">
    <label class="col-form-label col-md-2">Default Select</label>
    <div class="col-md-10">
    <select class="form-control form-select">
    <option>-- Select --</option>
    <option>Option 1</option>
    <option>Option 2</option>
    <option>Option 3</option>
    <option>Option 4</option>
    <option>Option 5</option>
    </select>
    </div>
    </div>
    <div class="form-group row">
    <label class="col-form-label col-md-2">Radio</label>
    <div class="col-md-10">
    <div class="radio">
    <label>
    <input type="radio" name="radio"> Option 1
    </label>
    </div>
    <div class="radio">
    <label>
    <input type="radio" name="radio"> Option 2
    </label>
    </div>
    <div class="radio">
    <label>
    <input type="radio" name="radio"> Option 3
    </label>
    </div>
    </div>
    </div>
    <div class="form-group row">
    <label class="col-form-label col-md-2">Checkbox</label>
    <div class="col-md-10">
    <div class="checkbox">
    <label>
    <input type="checkbox" name="checkbox"> Option 1
    </label>
    </div>
    <div class="checkbox">
    <label>
    <input type="checkbox" name="checkbox"> Option 2
    </label>
    </div>
    <div class="checkbox">
    <label>
    <input type="checkbox" name="checkbox"> Option 3
    </label>
    </div>
    </div>
    </div>
    <div class="form-group row">
    <label class="col-form-label col-md-2">Textarea</label>
    <div class="col-md-10">
    <textarea rows="5" cols="5" class="form-control" placeholder="Enter text here"></textarea>
    </div>
    </div>
    <div class="form-group mb-0 row">
    <label class="col-form-label col-md-2">Input Addons</label>
    <div class="col-md-10">
    <div class="input-group">
    <span class="input-group-text">$</span>
    <input class="form-control" type="text">
    <div class="input-group-append">
    <button class="btn btn-primary" type="button">Button</button>
    </div>
    </div>
    </div>
    </div>
    </form>
    </div>
    </div>
    <div class="card">
    <div class="card-header">
    <h4 class="card-title">Input Sizes</h4>
    </div>
    <div class="card-body">
    <form action="#">
    <div class="form-group row">
    <label class="col-form-label col-md-2">Large Input</label>
    <div class="col-md-10">
    <input type="text" class="form-control form-control-lg" placeholder=".form-control-lg">
    </div>
    </div>
    <div class="form-group row">
    <label class="col-form-label col-md-2">Default Input</label>
    <div class="col-md-10">
    <input type="text" class="form-control" placeholder=".form-control">
    </div>
    </div>
    <div class="form-group mb-0 row">
    <label class="col-form-label col-md-2">Small Input</label>
    <div class="col-md-10">
    <input type="text" class="form-control form-control-sm" placeholder=".form-control-sm">
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    </div>

   @endsection
