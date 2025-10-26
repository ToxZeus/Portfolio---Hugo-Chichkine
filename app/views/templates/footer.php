    <!-- Footer -->
    <footer>
        <div class="container">
            <p>
                <?php echo date('Y'); ?> © Hugo Chichkine
                <br>
                <a href="#contact"><?php echo $translations['contact_me']; ?></a>
            </p>
        </div>
    </footer>

    <!-- Back to top button -->
    <button id="backToTopBtn" aria-label="<?php echo $translations['back_to_top']; ?>">⬆️</button>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script src="/assets/js/app.js" type="module"></script>
</body>
</html>