<?php require admin_view('static/header') ?>

    <div class="box-">
        <h1>
            Referans Düzenle
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="box-" tab>

        <div class="admin-tab">
            <ul tab-list>
                <li>
                    <a href="#">Genel</a>
                </li>
                <li>
                    <a href="#">SEO</a>
                </li>
            </ul>
        </div>

        <form action="" method="post" class="form label" enctype="multipart/form-data">
            <div class="tab-container">
                <div tab-content>
                    <ul>
                        <li>
                            <label>Referans Başlığı</label>
                            <div class="form-content">
                                <input type="text" name="reference_title" value="<?= post('reference_title') ? post('reference_title') : $row['reference_title'] ?>">
                            </div>
                        </li>
                        <li>
                            <label>Referans Açıklaması</label>
                            <div class="form-content">
                                <textarea name="reference_content"
                                          class="editor-short"><?= post('reference_content') ? post('reference_content') : $row['reference_content'] ?></textarea>
                            </div>
                        </li>
                        <li>
                            <label>Referans Kategorisi</label>
                            <div class="form-content">
                                <select name="reference_categories[]" multiple size="6">
                                    <?php foreach ($categories as $category): ?>
                                        <option <?=(post('reference_categories') ? post('reference_categories') : $row['reference_categories']) && in_array($category['category_id'], (post('reference_categories') ? post('reference_categories') : explode(',', $row['reference_categories']))) ? 'selected' : null?> value="<?= $category['category_id'] ?>"><?= $category['category_name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </li>
                        <li>
                            <label>Kullanılan Teknolojiler</label>
                            <div class="form-content">
                                <input type="text" name="reference_tags" value="<?= post('reference_tags') ? post('reference_tags') : $row['reference_tags'] ?>" class="tagsinput">
                            </div>
                        </li>
                        <li>
                            <label>Referans Linki</label>
                            <div class="form-content">
                                <input type="text" name="reference_demo" value="<?= post('reference_demo') ? post('reference_demo') : $row['reference_demo'] ?>">
                            </div>
                        </li>
                        <li>
                            <label>Referans Görseli</label>
                            <div class="form-content">
                                <input type="file" name="reference_image">
                                <div style="padding-top: 10px;">
                                    <img src="<?=site_url('upload/reference/' . $row['reference_url'] . '/' . $row['reference_image'])?>" width="400" alt="">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div tab-content>
                    <ul>
                        <li>
                            <label>SEO Url</label>
                            <div class="form-content">
                                <input type="text" name="reference_url" value="<?= post('reference_url') ? post('reference_url') : $row['reference_url'] ?>">
                                <p>Eğer boş bırakırsanız otomatik olarak sayfa adını baz alır.</p>
                            </div>
                        </li>
                        <li>
                            <label>SEO Title</label>
                            <div class="form-content">
                                <input type="text" name="reference_seo[title]" value="<?=$seo['title']?>">
                            </div>
                        </li>
                        <li>
                            <label>SEO Description</label>
                            <div class="form-content">
                                <textarea name="reference_seo[description]" cols="30" rows="5"><?=$seo['description']?></textarea>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul>
                    <li class="submit">
                        <input type="hidden" name="submit" value="1">
                        <button type="submit">Gönder</button>
                    </li>
                </ul>
            </div>
        </form>
    </div>

    <script>
        var tags = [];
    </script>

<?php require admin_view('static/footer') ?>