<!-- Footer -->
<footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p><?= Date('Y') . " &copy; Karyawan NF" ?></p>
        </div>
        <div class="float-end">
            <p>Page rendered in <strong>{{ (microtime(true) - LARAVEL_START) }}</strong> seconds. <?= 'Laravel Version <strong>' . app()->version() . '</strong>' ?></p>
        </div>
    </div>
</footer>
<!-- End of Footer -->