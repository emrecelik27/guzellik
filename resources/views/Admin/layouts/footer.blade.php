<footer class="footer">
    {{ App\Models\KeyValue::Where('key', 'admin_footer')->first()->value ?? '© 2019 Zegva - Crafted with by Themesdesign.' }}
</footer>
