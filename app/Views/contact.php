<div class="container pt-5">
    <div class="row">
        <div class="col-md-3">
            <h3> Contactez-moi </h3>
            <p> Si vous avez des questions, n'hésitez pas à me contacter. </p>
            <p> Je vous répondrai dans les plus brefs délais. </p>
        </div>
        <div class="col-md-9 bg-secondary py-3 rounded">
            <h4>Nouveau Message</h4>
            <?= form_open('\MailController\traitement', 'class="needs-validation"'); ?>
                <div class="form-group">
                    <label for="email">Destinataire</label>
                    <?= form_input('email', set_value('email'), 'class="form-control" required'); ?>
                    <?= validation_show_error('email') ?>
                </div>

            <div class="form-group">
                <label for="nom">Sujet</label>
                <?= form_input('subject', set_value('subject'), 'class="form-control" required'); ?>
                <?= validation_show_error('subject') ?>
            </div>

            <div class="form-group">
                <label for="prenom">Message</label>
                <?= form_input('message', set_value('message'), 'class="form-control" required'); ?>
                <?= validation_show_error('message') ?>
            </div>

                <?= form_submit('submit', 'Envoyer', 'class="btn btn-primary"'); ?>
            <?= form_close(); ?>
        </div>
    </div>
</div>