<?php include('layouts/header.php'); ?>

<main class="container mt-5">
    <h2 class="text-center mb-4">Descubra seu Signo</h2>

    <form action="show_zodiac_sign.php" method="POST" class="card p-4 shadow mx-auto" style="max-width: 400px;">
        <div class="mb-3">
            <label for="birthdate" class="form-label">Data de Nascimento:</label>
            <input 
                type="date" 
                class="form-control" 
                id="birthdate" 
                name="birthdate" 
                required 
                min="1900-01-01" 
                max="2100-12-31"
            >
        </div>
        <button type="submit" class="btn btn-primary w-100">Ver meu Signo</button>
    </form>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
