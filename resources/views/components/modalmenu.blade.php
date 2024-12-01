<!-- Modal for Upload Menu (example) -->
<div class="modal fade" id="uploadMenuModal" tabindex="-1" aria-labelledby="uploadMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadMenuModalLabel">Upload Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form content here, with checkboxes dropdown -->
                <form>
                    <div class="mb-3">
                        <label for="menuName" class="form-label">Menu Name</label>
                        <input type="text" class="form-control" id="menuName" required>
                    </div>
                    <div class="mb-3">
                        <label for="categories" class="form-label">Categories</label>
                        <select class="form-select" multiple>
                            <option value="1">Category 1</option>
                            <option value="2">Category 2</option>
                            <option value="3">Category 3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="menuImage" class="form-label">Upload Image</label>
                        <input type="file" class="form-control" id="menuImage">
                    </div>
                    <button type="submit" class="btn btn-primary">Upload Menu</button>
                </form>
            </div>
        </div>
    </div>
</div>
