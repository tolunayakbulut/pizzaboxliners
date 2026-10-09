<?php if (!empty($specs)): ?>
<section class="py-5" id="specifications">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-4">
                    <span class="section-label">Specifications</span>
                    <div class="divider divider-center"></div>
                    <h2 class="section-title"><?= esc($spec_title ?? 'Pizza Box Liner Specifications') ?></h2>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered align-middle mb-3">
                        <tbody>
                            <?php foreach ($specs as $label => $value): ?>
                            <tr>
                                <th scope="row" class="bg-soft" style="width:40%"><?= esc($label) ?></th>
                                <td><?= esc($value) ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <p class="text-muted small text-center mb-0">
                    For other sizes and full technical details, <a href="<?= base_url('contact') ?>">contact us</a> with your requirements.
                </p>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
