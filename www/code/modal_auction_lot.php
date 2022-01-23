<div class="modal_1" data-modal="3">
	<svg class="modal_1__cross js-modal-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
		<path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z" />
	</svg>
	<script type="text/javascript">
	function AjaxFormRequest_callback(result_id, formMain) {
		var send = true;
		$('form#formAuctionLot input[type="text"]').each(function() {
			if(!$(this).val() || $(this).val() == '') {
				if($("#errmessage").length > 0) {} else {
					$('#formAuctionLot').append('<span id="errmessage">пожалуйста, заполните все поля</span>');
				}
				send = false;
			}
		});
		if(!send) return false;
		jQuery.ajax({
			url: "code/sendformauctionlot.php",
			type: "POST",
			dataType: "html",
			data: jQuery("#" + formMain).serialize(),
			success: function(response) {
				document.getElementById(result_id).innerHTML = response;
				jQuery('.modal_1').html('<h5>Отлично!</h5><p>Вы отправили заявку.<br>Ожидайте звонка.</p>');
				jQuery('#form-callback-name').css('display', 'none');
				jQuery('#form-callback-phone').css('display', 'none');
			},
			error: function(response) {
				document.getElementById(result_id).innerHTML = "<p>Возникла ошибка при отправке формы. Попробуйте еще раз</p>";
			}
		});
	}
	</script>
	<div class="form">
		<form method="post" action="" id="formAuctionLot">
			<input placeholder="Вставьте ссылку на лот аукциона..." style="margin-bottom: 7px;" class="form-input form-control-has-validation form-control-last-child" id="form-callback-name" type="text" name="name">
			<input placeholder="Телефон..." style="margin-bottom: 7px;" class="form-input form-control-has-validation form-control-last-child" id="form-callback-phone" type="text" name="phone">
			<div id="messegeResult">
				<input class="btn button button-block button-secondary button-nina" id="button" type="button" value="Отправить" onclick="AjaxFormRequest_callback('messegeResult', 'formAuctionLot')" />
			</div>
		</form>
	</div>
</div>
<div class="overlay js-overlay-modal"></div>
