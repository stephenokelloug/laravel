@extends('layouts.dashboard')

@section('pageHeader', 'Set User Permissions')
@section('pageDescription', 'Here you can set user permission for access control to your application')
    
@section('content')
<section class="my-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <form class="card">
                    <div class="card-body">

                        <!-- For each permission group get the permissions -->
                        @foreach ($permissionGroups as $permissionGroup)
                        <div class="row">
                            <div class="col-lg-2" style="width: 5%;">
                               
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="checkAll" data-bs-target="{{ '.'.$permissionGroup->name }}" />
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <p data-bs-toggle="collapse" data-bs-target="#contentId">{{ $permissionGroup->name }}</p>
                                <div class="collapse row" id="contentId">
                                    @foreach ($permissionGroup->permissions as $permission)
                                    <div class="col-lg-2" style="width: 5%;">
                                        <div class="form-check">
                                            <input class="form-check-input {{ $permissionGroup->name }}" type="checkbox" name="permissions[]" value="" id="{{ 'permissionCheckBox'.$permission->id }}" {{ (in_array($permission->name, $userPermissions)) ? 'checked' : '' }} />
                                        </div>
                                    </div>
                                    <div class="col-lg-10">
                                        <label for="{{ 'permissionCheckBox'.$permission->id }}">{{ $permission->name }}</label>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </form>
                
            </div>
        </div>
    </div>
</section>
@endsection



