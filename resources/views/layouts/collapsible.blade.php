$numCollapsible = 4;
@if(!isset($numCollapsible))
    $numCollapsible = 0;
@endif
<ul class="collapsible">
@for($i = 0; $i < $numCollapsible; $i++)
  <li>
    <div class="collapsible-header">
      <i class="material-icons">filter_drama</i>
      @yield('title')
      <span class="new badge"></span></div>
    <div class="collapsible-body"><p>
    @yield('description')
    </p></div>
  </li>
@endfor
</ul>