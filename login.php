<div class="row mt-3">
    <div class="col-md-4 offset-md-4">
        <div class="card">
            <div class="card-header">
                LOGIN
            </div>
            <div class="card-body">
                <form action="config/aksi_login.php" method="POST">
             <div class="mb-3">
                   <label class="form-label">Username</label>
                   <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required>
             </div>
             <div class="mb-3">
                   <label class="form-label">Password</label>
                   <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
             </div>
             <div class="mb-3">
                   <label class="form-label">Login Sebagai</label>
                   <select class="form-control" name="level">
                    <option value="masyarakat">Masyarakat</option>
                    <option value="Admin">Admin</option>
                    <option value="petugas">Petugas</option>
                   </select>
             </div>
           </div> 
           <div class="card-footer"></div>
           <button type="submit" name="kirim" class="btn btn-primary">LOGIN</button>
           <a href="index.php?page=registrasi" class="m-3">Belum punya akun? Daftar disini!</a>
         </div>
         </form>
        </div>
       </div>
       </div>