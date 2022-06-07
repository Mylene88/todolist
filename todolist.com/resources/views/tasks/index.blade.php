@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">

		 <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Create a new tasks</div>
                <div class="panel-body">

			<!-- New task form -->
			<form action="{{ url('tasks') }}" method="POST">
				{{ csrf_field() }}

				
					<div class="form-group row">
						<!-- New task name -->
						<label for="newTaskName" class="col-md-4 control-label">New Task Description</label>
						<div class="col-md-12">
						<input type="text" name="name" id="newTaskName" class="form-control" placeholder="Enter task description">
					</div>
					</div>
						<div class="form-group row ">	
						<!-- New task expiring date -->
						<label for="newTaskName" class="col-md-4 control-label">Add expiration date</label>
						<div class="col-md-12">
						<input type="date" name="expired_at" id="newTaskdate" class="form-control" placeholder="Add expiration date">
						</div>
						</div>

						<!-- Add task button -->
						<span class="col-md-offset-4">
							<button class="btn btn-danger" type="submit">Add Task</button>
						</span>
					</div>
				</div>
				</div>
				</div>
				
			

				<!-- Display validation errors -->
				@include('commons.errors')
			</form>			

			
			<!-- Current tasks -->
			<div class="panel panel-info">
				<div class="panel-heading outline-danger">Tasks</div>

				<div class="panel-body">
					@if(count($tasks))
						<table class="table" >
							<thead>
								<tr>
								<tr class="table-warning">
								<td>ID</td>
								<td>Description</td>
								<td>Status</td>
								<td>Creation date</td>
								
								<td>Expiration date</td>
								<td class="text-center">Action</td>
								</tr>
								</tr>
							</thead>
							<tbody>
							
								@foreach($tasks as $task)
								@php
								// Start date
									$expire = $task->expired_at;
									// End date
									$today = date('Y-m-d');
									$diff = strtotime($expire) - strtotime($today);
    								$result= abs(floor($diff / (60 * 60 * 24)));
								@endphp
									<tr>
										<!-- Task id -->
										<td>
											@if($task->done)
												<del>{{ $task->id }}</del>
											@else
												{{ $task->id }}
											@endif
										</td>
										<!-- Task name -->
										<td>
										
							
											@if($task->done)
												<del>{{ $task->name }}</del>

											@elseif($expire <= $today)
											<span class="label label label-danger">{{ $task->name }}</span>
									@else
											{{ $task->name }}
											@endif
										</td>

										<!-- Task status -->
										<td>
											@if($task->done)
											<span class="label label label-danger">Done</span>
											@else
											<span class="label label label-primary">In Process ...</span>
											@endif
										</td>


										<!-- Task creation date -->
										<td>
										
												{{ $task->created_at }}
											
										</td>
										<!-- Task creation date -->
										<td>
										@if($diff <= 0)
										<p>since {{ $result }} days </p>
										@elseif($result == 1)
										<p>In {{ $result }} day </p>
										@else
										<p>In {{ $result }} days </p>
										@endif
											
										</td>

										<td class="text-center">
											<!-- Mark as done/undone button -->
											<form class="inline" action={{ url('tasks/'.$task->id) }} method="POST">
												{{ csrf_field() }}
												{{ method_field('PATCH') }}

												@if($task->done)
													<button class="btn btn-danger" type="submit" aria-label="Undone" title="Mark as undone">
														<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
													</button>
												@else
													<button class="btn btn-primary" type="submit" aria-label="Done" title="Mark as done">
														<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
													</button>
												@endif
											</form>	
											
											<!-- modify button -->
											
											
											<!-- Delete button -->
											<form class="inline" action="{{ url('tasks/'.$task->id) }}" method="POST">
												{{ csrf_field() }}
												{{ method_field('DELETE') }}
												
												<button class="btn btn-default" type="submit" aria-label="Delete" title="Delete task">
													<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
												</button>
											</form>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					@else
						<p class="text-center">
							<span class="glyphicon glyphicon-ice-lolly-tasted" aria-hidden="true"></span> You don't have any task yet. Start adding new task using the input above!
						</p>
					@endif

					{{ $tasks->links() }}
				</div>
			</div>	
		</div>
	</div>
	</div>
@endsection
