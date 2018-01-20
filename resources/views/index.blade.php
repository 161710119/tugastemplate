@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">WELCOME TO MY WEB</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
<center>
                    <?php
          $image=glob("gambar/20170709_084714.jpg");
          for($i=0;$i<count($image);$i++)
            {
          $single_image = $image[$i];
          ?>
          <img src="<?php echo $single_image;?>" width="460" height="260"/?>
          <?php
            }
          ?>
<br>
          WELCOME TO MY WEB FOR BEGINNER SIGN IN YOUR ACCOUNT OR REGISTER YOUR NEW ACCOUNT 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection