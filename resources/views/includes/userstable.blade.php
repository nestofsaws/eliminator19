<div class="container table-responsive">
	<table class="table table-sm table-striped table-hover text-center table-dark table-bordered">
		<thead>
		  <tr class="text-center">
			<th>Name</th>
			<th>Wins</th>
			<th>1</th>
			<th>2</th>
			<th>3</th>
			<th>4</th>
			<th>5</th>
			<th>6</th>
			<th>7</th>
			<th>8</th>
			<th>9</th>
			<th>10</th>
			<th>11</th>
			<th>12</th>
			<th>13</th>
			<th>14</th>
			<th>15</th>
			<th>16</th>
			<th>17</th>
			<th>Wins</th>
		  </tr>
		</thead>
		<tbody>
		@foreach( $users as $user )
			<tr><td>{{$user->name}}</td>
			<td>0</td>
			<td><img src="{{asset('/svg/ATL.svg')}}" alt="ATL" title="ATL" width="33"></td>
			@php
				for ($x = 1; $x <= 15; $x++) {
					echo "<td>-</td>";
				}
			@endphp
			<td><img src="{{asset('/svg/XXX.svg')}}" alt="XXX" title="XXX" width="33"></td>
			<td>0</td>
			</tr>
		@endforeach	
		</tbody>
	</table>
</div>			