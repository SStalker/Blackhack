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
                   <li><a href="{{ URL::to('toy_wars') }}">Toy Wars - Unreal Engine Project</a></li>
                   <li><a href="{{ URL::to('asteroids') }}">Asteroids</a></li>
                   <li><a href="{{ URL::to('drolraw') }}">Drolraw - Online CCG</a></li>
                   <li class="divider"></li>
                   <li><a href="{{ URL::to('evos') }}">EVOS - Electronic Voting System Osnabrück</a></li>
                   <li class="divider"></li>
                   <li><a href="{{ URL::to('laguna') }}">LagunaChat</a></li>
               </ul>
           </li>
           <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hacking <b class="caret"></b></a>
               <ul class="dropdown-menu multi-column columns-2">
                   <li>
                       <ul class="multi-column-dropdown col-sm-6">
                           <li><a href="{{ URL::to('wlan-scanner') }}">WLAN-Scanner</a></li>
                           <li><a href="{{ URL::to('mas') }}">MAS</a></li>
                       </ul>
                   </li>
                   <li>
                       <ul class="multi-column-dropdown col-sm-6">
                           <li><a href="{{ URL::to('hacking-under-friends') }}">Hacking under friends</a></li>
                           <li><a href="{{ URL::to('wpa2-crack') }}">WPA2 Crack</a></li>
                       </ul>
                   </li>
               </ul>
           </li>
           @if(Auth::user())
             <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administration <b class="caret"></b></a>
                 <ul class="dropdown-menu">
                   <li><a href="{{ url('/posts') }}">Manage Posts</a></li>
                   <li><a href="{{ url('/accountings') }}">Manage Accountings</a></li>
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
           <li><a href="{{ URL::to('contact') }}">Contact</a></li>
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
