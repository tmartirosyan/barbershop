<?php include "../tpl/header.php"; ?>
<div class="registerForm">
  <form>
    <div class="row">
      <div class="mx-auto form_group col-5">

        <div class="form-group row">
          <label class="col-4" for="registerName">Anun</label>
          <input name="registerName" required type="text" class="form-control col-8" id="registerName" placeholder="Anun">
        </div>
        <div class="form-group row">
          <label class="col-4" for="registerAge">Tariqayin xumb</label>
          <select name="registerAge" required class="form-control col-8" id="registerAge">
            <option value="hidden" selected hidden disabled>yntrel tariqy</option>
            <?php $db = new MysqlDB();
            $query = $db->getAge();
            while ($result = mysqli_fetch_assoc($query)) { ?>
              <option value="<?= $result['id'] ?>"><?= $result['age'] ?></option>
            <?php } ?>
          </select>
        </div>

        <div class="form-group row">
          <label class="col-4" for="registerNumber">hamar</label>
          <input type="number" required class="form-control col-8" id="registerNumber" placeholder="hamar">
        </div>
        <div class="form-group row">
          <label class="col-4" for="registerHairdress">Varsavir</label>
          <select name="registerHairdress" required class="form-control col-8" id="registerHairdress">
            <option value="hidden" selected hidden disabled>yntrel varsavirin</option>
            <?php $db = new MysqlDB();
            $query = $db->getHairdress();
            while ($result = mysqli_fetch_assoc($query)) { ?>
              <option value="<?= $result['id'] ?>"><?= $result['hairdress'] ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group row">
          <label class="col-4" for="registerDate">Jam</label>
          <input class="form-control col-3" id="registerDateDay" type="text"  />

          <select name="registerDate" required class="form-control col-4" id="registerDate">
            <option value="hidden" selected hidden disabled>yntrel jamy</option>
            <?php $db = new MysqlDB();
            $query = $db->getDate();
            while ($result = mysqli_fetch_assoc($query)) { ?>
              <option disabled value="<?= $result['id'] ?>"><?= $result['date'] ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group row">
          <label class="col-4" for="registerHairCut">Ktrvac</label>
          <select name="registerHairCut" required title="Yntreq ktrvacqy" multiple class="selectpicker form-control  col-8" id="registerHairCut">
            <?php $db = new MysqlDB();
            $query = $db->getHairCuts();
            while ($result = mysqli_fetch_assoc($query)) { ?>
              <option disabled value="<?= $result['price'] ?>"><?= $result['name'] ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group row">
          <div class="col-4">gin</div>

          <div id="registerPrice" class="col-8">0</div>
        </div>

        <input name="registerSubmit" id="registerSubmit" type="button" class="btn btn-primary float-right" value="Grancvel">

        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                grancumy avartvac e
                <div id="dataModal"></div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
<?php include "../tpl/footer.php"; ?>