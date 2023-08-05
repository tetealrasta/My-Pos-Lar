<!-- Footer opened -->
<style>
  footer{
  max-height: 5px;
    position: fixed;
    bottom: 0;
    width: 100%;
    /* z-index: 10px; */
    /* left: 0;
    margin-top:10px;   */
    }
</style>
 <footer class="bg-white p-4">
      <div class="row">
        <div class="col-md-8">
          <div class="text-center text-md-left">
              <p class="mb-0"> &copy; حقوق النشر محفوظه لجهاز التحصيل <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span>. <a href="{{ URL('Admin\Me')}}">Eng. Nasr Alden Osman Mohamed(0114700220) </a>  </p>
          </div>
        </div>
        <div class="col-md-4">
          <ul class="text-center text-md-right">
            {{-- <li class="list-inline-item"><a href="#">Terms & Conditions </a> </li>
            <li class="list-inline-item"><a href="#">API Use Policy </a> </li>
            <li class="list-inline-item"><a href="#">Privacy Policy </a> </li> --}}
          </ul>
        </div>
      </div>
    </footer>
<!-- Footer closed -->
