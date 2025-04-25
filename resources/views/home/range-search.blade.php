<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-6">
                <h2 class="section-title">Apakah anda dalam jangkauan kami?</h2>
                <p class="lead">Ayo cek disini!</p>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-6">
                <div class="form-group">
                    <label for="project-dropdown">Project</label>
                    <select id="project-dropdown" class="form-control select2">
                        <option value="">-- Pilih Project --</option>
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="cluster-dropdown">Cluster</label>
                    <select id="cluster-dropdown" class="form-control" disabled>
                        <option value="">-- Pilih Cluster --</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="availability-status">
            <span id="status-text">Status: Pilih project dan cluster</span>
            <div id="subscribe-button" style="display: none; margin-top: 10px; text-align: center;">
                <button class="subscribe-btn">Berlangganan Sekarang</button>
            </div>
        </div>

    </div>
</section>
