<?php 

// Includes
App::import('Lib','ProgramsHelper');
App::import('Lib','RulesHelper');
App::import('Lib','Strings');
App::import('Lib','UsersHelper');
App::import('Lib','ScholarsHelper');


// Load a model into the library
APP::import('Model', 'Model');
$this->Model = new Model();

// Verify if an entry is null
if (!$modelId) {throw new NotFoundException(__('Invalid model'));}
APP::import('Model', 'Model');
$this->Model = new Model();
$model = $this->Model->findById($modelId);
if (!$model) throw new NotFoundException(__('Invalid model'));

// Edit
$this->Model->id = $id;
$this->Model->set("field", $value);
$this->Model->save();

// Add
$this->Model->create();
$this->Model->set("field", $value);
$this->Model->save();

// Ajax view
$this->layout = null;
$this->set('information', $information);
$this->render('/Elements/ajaxreturn');


// Tables
/*
<table class="table table-striped">
	<tr>
		<th>1</th>
	</tr>
	<?php foreach ($data as $key => $value): ?>
	<tr>
		<td>2</td>
	</tr>
	<?php endforeach ?>
</table>
*/

// Last inserted id
$this->Model->getLastInsertID();

// Flash
$this->Session->setFlash('message','custom-flash');

// Create Folder
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');
$folder = new Folder();
if ($folder->create('files' . DS . 'users' . DS . 'x')) {
	// Successfully created the nested folders
}

// return to referer
$this->redirect($this->referer());

// Option form helper
/*
echo $this->Form->select('field', array(
    'Value 1' => 'Label 1',
    'Value 2' => 'Label 2',
    'Value 3' => 'Label 3'
));
*/

// Disable safe update mysql workbench
SET SQL_SAFE_UPDATES=0;

// Add Entry
	public function add(){
		$error = '';
		if (!empty($this->data)) {
			$this->Model->create($this->data, true);
			if ($this->Model->save()) {
				$this->Session->setFlash('Data has been successfully stored','custom-flash');
			}else{
				$this->Session->setFlash('Input data is not valid','custom-flash');
				$this->Session->write('errors.Model', $this->Model->validationErrors);
				$this->Session->write('data', $this->data);
				$error = '#error';
			}
			return $this->redirect($this->referer() . $error);
		}
	}

// Link with style

	echo $this->Html->link(
			__('Editer Rapport pour la banque'),
			array('action' => 'generateReport', 'ext' => 'pdf', $month, $year),
			array('class' => 'pull-right btn btn-danger', 'target' => '_blank', 'style' => 'padding: 0px 12px;')
	);


// Dates

		// Construct the date
	$m = date($year."-".$month."-1");
		// Get month + 1
	$m_plus_one = date("Y-m-d", strtotime("+1 month", strtotime($m)));

	getdate();
	[seconds] => 40
	[minutes] => 58
	[hours]   => 21
	[mday]    => 17
	[wday]    => 2
	[mon]     => 6
	[year]    => 2003
	[yday]    => 167
	[weekday] => Tuesday
	[month]   => June
	[0]       => 1055901520
		//The powerful date function
	$created = new DateTime('2013-12-31 10:54:02');
	$created->modify('+1 month')->format('Y');
	$created->format('Y');
 
	$m = date($pair[1]."-".$pair[0]."-1");
	// Get month + 1
	$m_plus_one = date("Y-m-d", strtotime("+1 month", strtotime($m)));
	array("and" => 
		array(
			"ScholarsPrograms.created >=" => $m,
			"ScholarsPrograms.created <" => $m_plus_one
		)
	)


// boostrap alerts
?>
<script type="text/javascript">
	setAlert('danger', 'Prière de saisir le montant', 'same-label-exist', '.alerts');
</script>
<?php

?>
// Submit button

<button type"submit" class="btn btn-danger">Modifier</button>

// Encode URL vars
encodeURIComponent()

// Empty lists
'empty' => 'Prière de choisir ...'

// I don't have a name for that
<?php $country = IdHelper::GetCountryById($member['Member']['moral_country']); echo $country['Country']['name']; ?>



<?php 
			$old_limit = ini_set("memory_limit", "600M");
			set_time_limit(10000000);
?>


<?php 
	$this->Model->recursive = -1;
?>

<!-- Please wait -->
<button class="btn btn-danger pull-right please-wait" data-loading-text="Chargement ..." ></button>

<!-- tables -->
<table class="table">
	<thead>
		<tr>
			<th>#</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Username</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>Mark</td>
			<td>Otto</td>
			<td>@mdo</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Jacob</td>
			<td>Thornton</td>
			<td>@fat</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Larry</td>
			<td>the Bird</td>
			<td>@twitter</td>
		</tr>
	</tbody>
</table>


'empty' => 'Prière de choisir ...'