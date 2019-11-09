
@extends('layouts/master')
<div class="banner" >
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 form-color">
            <form class="form-login" action="{{route('login')}}" method="post" accept-charset="utf-8">							<div class="login">
                <center><span>WELLCOME</span></center>
            </div>
                <div class="logo-login">
                    <center>
                        <img style="margin-top: -10%;" src="../public/images/logo.png" alt="">
                    </center>
                </div>
                <div class="row input-text" id="input-user">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="username">
                </div>
                <div class="row input-text" id="input-pass">
                    <i class="fas fa-lock"></i>
                    <input id="password-field" type="password" name="password" placeholder="password">
                    <i style="cursor:pointer;" class="fas fa-eye toggle-password" toggle="#password-field"></i>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="checkbox" style="margin-left: -20px;" name="Remember">
                        <span style="color: white;">Remember me</span>
                    </div>
                    <div class="col-md-6">
                        <a href="" title=""><small>Forgot your password?</small></a>
                    </div>
                </div>
                <div class="button-login">
                    <center>
                        <input type="submit" class="btn btn-primary btn-lg btn-block" name="login" value="LOGIN">
                    </center>
                </div><br><br><br>
                <div class="link-sign">
                    <center><span>Don’t have an account? <a href="" title="">Sign Up</a></span></center>
                </div>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
