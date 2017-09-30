<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset($customer->picture) }}" class="img-circle" alt="{{ $customer->name }}">
      </div>
      <div class="pull-left info">
        <p>{{ $customer->name }}</p>
        @permission('read-companies-companies')
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
           aria-expanded="false"><span class="caret"></span> &nbsp;{{ trans('general.change') }}</a>
        <ul class="dropdown-menu">
          @foreach($companies as $com)
            <li><a href="{{ url('companies/companies/'. $com->id .'/set') }}">{{ $com->company_name }}</a></li>
          @endforeach
          @permission('update-companies-companies')
          <li role="separator" class="divider"></li>
          <li><a href="{{ url('companies/companies') }}">{{ trans('companies.manage') }}</a></li>
          @endpermission
        </ul>
        @endpermission
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" id="form-search" class="sidebar-form">
      <div id="customer-search" class="input-group">
        <input type="text" name="main_search" value="<?php //echo $search; ?>" id="input-main-search"
               class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="main_search" id="search-btn" class="btn btn-flat"><i
                        class="fa fa-search"></i></button>
                </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    {!! Menu::get('CustomerMenu') !!}
  </section>
  <!-- /.sidebar -->
</aside>
