{{-- Source: http://bootsnipp.com/snippets/pj2aa  --}}
<nav class="container navbar navbar-default" role="navigation">
   <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
       </button>
       <a class="navbar-brand" href="{{ URL::to('/') }}">Blackhack</a>
   </div>
   <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-2">
       <ul class="nav navbar-nav">
           <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Programming <b class="caret"></b></a>
               <ul class="dropdown-menu">
                   <li><a href="#">Action</a></li>
                   <li><a href="#">Another action</a></li>
                   <li><a href="#">Something else here</a></li>
                   <li class="divider"></li>
                   <li><a href="#">Separated link</a></li>
                   <li class="divider"></li>
                   <li><a href="#">One more separated link</a></li>
               </ul>
           </li>
           <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hacking <b class="caret"></b></a>
               <ul class="dropdown-menu multi-column columns-2">
                   <li>
                       <ul class="multi-column-dropdown col-sm-6">
                           <li><a href="#">Action</a></li>
                           <li><a href="#">Another action</a></li>
                           <li><a href="#">Something else here that's extra long so we can see how it looks</a></li>
                           <li class="divider"></li>
                           <li><a href="#">Separated link</a></li>
                           <li class="divider"></li>
                           <li><a href="#">One more separated link</a></li>
                       </ul>
                   </li>
                   <li>
                       <ul class="multi-column-dropdown col-sm-6">
                           <li><a href="#">Action</a></li>
                           <li><a href="#">Another action</a></li>
                           <li><a href="#">Something else here</a></li>
                           <li class="divider"></li>
                           <li><a href="#">Separated link</a></li>
                           <li class="divider"></li>
                           <li><a href="#">One more separated link</a></li>
                       </ul>
                   </li>
               </ul>
           </li>
           @if(Auth::user())
             <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administration <b class="caret"></b></a>
                 <ul class="dropdown-menu">
                   <li><a href="{{ url('/posts') }}">Administrate Posts</a></li>
                   <li><a href="#">Another action</a></li>
                   <li>
                     <a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        Logout
                     </a>
                     <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                     </form>
                    </li>
                 </ul>
             </li>
           @endif
           <li><a href="#">Contact</a></li>
           <li>
             {!! Form::open(['url' => 'search', 'method' => 'GET', 'class' => 'input-group navbar-form navbar-right']) !!}
               <div class='form-group input-group-btn'>
                 {!! Form::text('query', null, ['class' => 'form-control', 'placeholder' => 'Suche...']) !!}
               </div>
             {!! Form::close() !!}
           </li>
       </ul>
   </div>
   <!--/.navbar-collapse-->
</nav>
