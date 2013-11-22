<?php
$attributes = array('role' => 'form', 'class' => 'form-horizontal');
echo (form_error());
echo form_open('auth/inscription', $attributes);
?>
    <div class="form-group">
        <label class="col-lg-2 control-label">Nom</label>
        <div class="col-lg-3">
            <input name="nom" value="<?php echo set_value('nom'); ?>" 
            size="30" type="text" class="form-control " placeholder="Nom"/>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Prénom</label>
        <div class="col-lg-3">
            <input name="prenom" value="<?php echo set_value('prenom'); ?>" 
            size="30" type="text" class="form-control " placeholder="Prénom"/>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Date naissance</label>
        <div class="col-lg-4 row">
            <div class="col-xs-4">
                <select name="date_naissance_jour" class="form-control">
                    <option value="">Jour</option>
<?php
for ($i=1; $i <= 31; $i++) { 
?>
                    <option value="<?=$i;?>"><?=$i;?></option>
<?php
}
?>            
                </select>
            </div>
            <div class="col-xs-4">
                <select name="date_naissance_mois" class="form-control">
                    <option value="<?=$i;?>">Mois</option>                
<?php
for ($i=1; $i <= 12; $i++) { 
?>
                    <option value="<?=$i;?>"><?=$i;?></option>
<?php
}
?>            
                </select>
            </div>
            <div class="col-xs-4">
                <select name="date_naissance_annee" class="form-control">
                    <option value="<?=$i;?>">Année</option>                
<?php
for ($i=date('Y'); $i >= 1900; $i--) { 
?>
                    <option value="<?=$i;?>"><?=$i;?></option>
<?php
}
?>            
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Civilité</label>
        <div class="col-lg-2">
            <select name="" class="form-control">
                <option value="Mr">Mr .</option>
                <option value="Madame">Madame .</option>
                <option value="Mme">Mme .</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </div>
</form>