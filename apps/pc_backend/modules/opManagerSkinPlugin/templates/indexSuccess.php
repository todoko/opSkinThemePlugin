<h2><?php echo __('スキンプラグイン設定') ?></h2>

<p><?php echo __('スキンプラグインはどれか一つのみが「有効」になっている必要があります。') ?></p>
<?php echo $form->renderFormTag(url_for('opManagerSkinPlugin/index')); ?>
<table>
<tr>
<th><?php echo __('有効/無効') ?></th>
<th><?php echo __('プラグイン名') ?></th>
<th><?php echo __('バージョン') ?></th>
<th><?php echo __('スキンの説明') ?></th>
<th><?php echo __('プレビュー') ?></th>
</tr>
<?php echo $form['plugin']->render() ?>
<tr>
<td colspan="5">
<?php echo $form->renderHiddenFields() ?>
<input type="submit" value="<?php echo __('設定変更') ?>" />
</td>
</tr>
</table>
</form>

<h2><?php echo __('プラグインの追加') ?></h2>

<p><?php echo __('プラグインはプラグイン配布ページからダウンロードすることができます。') ?></p>
<p><?php echo __('ダウンロードしたファイルを解凍し、サーバ上の plugins ディレクトリにアップロードすることでプラグインがインストールできます。') ?></p>
<p><?php echo __('また、 opPlugin:install コマンドを実行することでもインストール可能です。') ?></p>
