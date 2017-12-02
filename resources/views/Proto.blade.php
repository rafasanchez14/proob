<link rel="stylesheet" href=" {{ url('/css/bootstrap.css')}}">
<link rel="stylesheet" href=" {{ url('/js/bootstrap.js')}}">
<head>
   @include('layout.layout')
</head>

<!-- This is a very simple parallax effect achieved by simple CSS 3 multiple backgrounds, made by http://twitter.com/msurguy -->

<div class="container">

    <div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel op">
			  	<div class="panel-heading">
			    	<h1 class="panel-title"> Please sign in</h1>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" action="{{url('Proto')}}" method="post">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="E-mail" name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="password" >
{{csrf_field()}}
              </div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
			    	    	</label>
			    	    </div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
            </fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
