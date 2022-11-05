	@extends("layouts.app")

	@section("style")
	<link href="assets/plugins/smart-wizard/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
	@endsection

		@section("wrapper")
            <div class="page-wrapper">
                <div class="page-content">
                    <!--breadcrumb-->
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                        <div class="breadcrumb-title pe-3">Forms</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Wizard</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="ms-auto">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary">Settings</button>
                                <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                                    <a class="dropdown-item" href="javascript:;">Another action</a>
                                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                                    <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end breadcrumb-->
                    <div class="row">
                        <div class="col-xl-12 mx-auto">
                            <h6 class="mb-0 text-uppercase">Form Wizard</h6>
                            <hr/>
                            <div class="card">
                                <div class="card-body">
                                    <br />
                                    <p>
                                        <label>Theme:</label>
                                        <select id="theme_selector">
                                            <option value="default">Default</option>
                                            <option value="arrows">Arrows</option>
                                            <option value="dots" selected>Dots</option>
                                            <option value="dark">Dark</option>
                                        </select>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="checkbox" id="is_justified" value="1" checked />
                                        <label for="is_justified">Justified</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label>Animation:</label>
                                        <select id="animation">
                                            <option value="none">None</option>
                                            <option value="fade">Fade</option>
                                            <option value="slide-horizontal" selected>Slide Horizontal</option>
                                            <option value="slide-vertical">Slide Vertical</option>
                                            <option value="slide-swing">Slide Swing</option>
                                        </select>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label>Go To:</label>
                                        <select id="got_to_step">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label>External Buttons:</label>
                                        <button class="btn btn-secondary" id="prev-btn" type="button">Go Previous</button>
                                        <button class="btn btn-secondary" id="next-btn" type="button">Go Next</button>
                                        <button class="btn btn-danger" id="reset-btn" type="button">Reset Wizard</button>
                                    </p>
                                    <br />
                                    <!-- SmartWizard html -->
                                    <div id="smartwizard">
                                        <ul class="nav">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#step-1">	<strong>Level 1</strong>
                                                    <br></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#step-2">	<strong>Level 2</strong>
                                                    <br></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#step-3">	<strong>Level 3</strong>
                                                    <br></a>
                                            </li>

                                        </ul>
                                        <div class="tab-content">
                                            <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                                                <h3>Step 1 Content</h3>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                                            <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                                                <h3>Step 2 Content</h3>
                                                <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                                            </div>
                                            <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
		@endsection



	@section("script")
	<script src="assets/plugins/smart-wizard/js/jquery.smartWizard.min.js"></script>
	<script>
		$(document).ready(function () {
			// Toolbar extra buttons
			var btnFinish = $('<button></button>').text('Finish').addClass('btn btn-info').on('click', function () {
				alert('Finish Clicked');
			});
			var btnCancel = $('<button></button>').text('Cancel').addClass('btn btn-danger').on('click', function () {
				$('#smartwizard').smartWizard("reset");
			});
			// Step show event
			$("#smartwizard").on("showStep", function (e, anchorObject, stepNumber, stepDirection, stepPosition) {
				$("#prev-btn").removeClass('disabled');
				$("#next-btn").removeClass('disabled');
				if (stepPosition === 'first') {
					$("#prev-btn").addClass('disabled');
				} else if (stepPosition === 'last') {
					$("#next-btn").addClass('disabled');
				} else {
					$("#prev-btn").removeClass('disabled');
					$("#next-btn").removeClass('disabled');
				}
			});
			// Smart Wizard
			$('#smartwizard').smartWizard({
				selected: 0,
				theme: 'dots',
				transition: {
					animation: 'slide-horizontal', // Effect on navigation, none/fade/slide-horizontal/slide-vertical/slide-swing
				},
				toolbarSettings: {
					toolbarPosition: 'both', // both bottom
					toolbarExtraButtons: [btnFinish, btnCancel]
				}
			});
			// External Button Events
			$("#reset-btn").on("click", function () {
				// Reset wizard
				$('#smartwizard').smartWizard("reset");
				return true;
			});
			$("#prev-btn").on("click", function () {
				// Navigate previous
				$('#smartwizard').smartWizard("prev");
				return true;
			});
			$("#next-btn").on("click", function () {
				// Navigate next
				$('#smartwizard').smartWizard("next");
				return true;
			});
			// Demo Button Events
			$("#got_to_step").on("change", function () {
				// Go to step
				var step_index = $(this).val() - 1;
				$('#smartwizard').smartWizard("goToStep", step_index);
				return true;
			});
			$("#is_justified").on("click", function () {
				// Change Justify
				var options = {
					justified: $(this).prop("checked")
				};
				$('#smartwizard').smartWizard("setOptions", options);
				return true;
			});
			$("#animation").on("change", function () {
				// Change theme
				var options = {
					transition: {
						animation: $(this).val()
					},
				};
				$('#smartwizard').smartWizard("setOptions", options);
				return true;
			});
			$("#theme_selector").on("change", function () {
				// Change theme
				var options = {
					theme: $(this).val()
				};
				$('#smartwizard').smartWizard("setOptions", options);
				return true;
			});
		});
	</script>
	@endsection
