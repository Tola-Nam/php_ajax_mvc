<!-- session items -->
<section class="boreder-top">
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <h2 class="mb-0 mt-3">items overview</h2>
            <p class="text-secondary">You can create your own category</p>
        </div>
        <div>
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalitems">
                Add Items +
            </button>
        </div>
    </div>

    <div class="border">
        <table class="table">
            <thead>
                <tr>
                    <td class="text-secondary">#ID</td>
                    <td class="text-secondary">Image</td>
                    <td class="text-secondary">name</td>
                    <td class="text-secondary">username</td>
                    <td class="text-secondary">Created At</td>
                    <td class="text-secondary">action</td>
                </tr>
            </thead>
            <tbody>
                <tr class="align-middle">
                    <td>1</td>
                    <td>
                        <div style="width: 40px; height: 40px" class="overflow-hidden bg-success rounded-3">
                            <img src="" alt="" class="w-100 h-100 object-fit-cover" />
                        </div>
                    </td>
                    <td>$1.1</td>
                    <td>$1.1</td>
                    <td>
                        <span class="bg-secondary-subtle text-secondary px-3 rounded-3">25/1/12</span>
                    </td>
                    <td class="text-center">
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modaleditsize">
                            U
                        </button>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modaldeleted">
                            D
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- modal add items  -->

    <div class="modal fade" id="modalitems">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Add items +</h1>
                    <button class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div>
                            <label for="image">Image</label>
                            <div id="previewimage" class="w-100 bg-secondary overflow-hidden"
                                style="height: 255px; object-fit: cover;">
                            </div>
                            <input type="file" name="image" id="image" class="form-control shadow-none border" />
                        </div>
                        <div class="my-2">
                            <label for="item">Items name</label>
                            <input type="text" class="form-control shadow-none border" />
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-bs-dismiss="modal">
                                close
                            </button>
                            <button class="btn btn-success">add Items</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- modal edit size -->
    <div class="modal fade" id="modaleditsize">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Add size +</h1>
                    <button class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="d-flex mb-2">
                            <div class="col-6 pe-2">
                                <label for="size">size</label>
                                <input type="text" class="form-control shadow-none border" id="size"
                                    placeholder="Enter your size" />
                            </div>
                            <div class="col-6">
                                <label for="price">Price</label>
                                <input type="text" class="form-control shodow-none border" id="price"
                                    placeholder="Enter your price" />
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button class="btn btn-success">Add size +</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- modal deleted size -->
    <div class="modal fade" id="modaldeleted">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Add size +</h1>
                    <button class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <p class="text-center fs-4">
                            Are you sir you want to
                            <span class="text-danger">deleted</span> ?
                        </p>
                    </form>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button class="btn btn-danger">Deleted</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>