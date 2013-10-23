@foreach($items as $role)
	<li class="{{system_role_class($role->level, 'dl-item', 'dl-not')}}" data-id="{{$role->id}}">

		<div class="dl-handle">
			
			<span>{{$role->name}}</span>

			@if(Pongo::isSystemRole($role->name))
				@if(Pongo::allowedCms($role->level))
					<span class="label label-danger">CMS</span>
				@else
					<span class="label label-default">SYS</span>
				@endif
			@endif

		</div>

		<a href="{{route('role.settings', array('role_id' => $role->id))}}"{{active($role->id, $role_id)}}>
			<i class="icon-chevron-left"></i>
		</a>

	</li>
@endforeach