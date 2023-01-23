<?php
Instances::adminCheckInstance();
?>


<!-- Modal -->
<div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Sign In</h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body"><form method="post">
                    
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" name="email" id="form3Example3" class="form-control" placeholder="Email address" required/>
                <label class="form-label" for="form3Example3">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" name="password" id="form3Example4" class="form-control"placeholder="Password" required/>
                <label class="form-label" for="form3Example4">Password</label>
            </div>

            <!-- Checkbox -->
            <!-- <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                <label class="form-check-label" for="form2Example33">
                Subscribe to our newsletter
                </label>
            </div> -->

            <!-- Submit button -->
            <button type="submit" name="submitSI" class="btn btn-danger btn-block mb-4 w-25"
            style="color: white;">
                Sign in
            </button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="register" style="color: rgb(255, 48, 48);">Register</a></p>
            </div>

            </form></div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>

    <section id="hero" class="vh-80">
      <div
        class="container d-flex flex-column justify-content-center align-items-center pt-md-5 mt-md-5 gap-4 text-center"
        style="z-index: 10"
      >
        <h1 class="" style="font-size: 60px"><b>Health is wealth</b></h1>
        <p class="w-50">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius
          dignissimos consequatur eum repellendus quibusdam asperiores atque,
          fugiat necessitatibus assumenda? Cum.
        </p>
        <a
          href="#"
          id="btn"
          class="text-decoration-none text-white border p-2 rounded-4"
          style="background-color: hsl(12, 88%, 59%); width: 150px"
          >See more</a
        >
      </div>
      <div
        class="container d-flex justify-content-center"
        style="margin-top: -16%"
      >
        <img
          src="./public/images/simon-lee-ynmPY1MLwMs-unsplash-removebg-preview.png"
          class="opacity-50 img-fluid"
          alt=""
          style="z-index: -1"
        />
      </div>
    </section>

    <section class="prices">
      <div class="container py-5 bg-light">
        <div class="row d-flex flex-column align-items-center text-center">
          <div class="col-md-6 col-8">
            <div class="text-box text-center">
              <h3>Our new products</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam
                omnis numquam ullam praesentium vitae sed architecto. Rerum
                aspernatur beatae laudantium.
              </p>
            </div>
          </div>
          <div class="col-12 mt-5 px-5">
            <div class="row d-flex justify-content-evenly align-items-center">
              <div
                class="card shadow-lg p-3 mb-5 bg-white rounded"
                style="width: 22rem"
              >
                <div class="card-body text-start">
                  <h4 class="card-title p-3">
                    <b>132$</b><sup style="font-size: 17px"> per unit</sup>
                  </h4>
                  <img
                    src="./public/images/elliot-l-angelier-4pq3qiOIET8-unsplash.jpg"
                    class="card-img-top img-thumbnail"
                    alt="..."
                  />
                  <h4 class="card-title py-3"><b>Gestoine</b></h4>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                  <p>
                    <a
                      href=""
                      class="card-text text-muted"
                      style="text-decoration: none"
                      >View Details</a
                    >
                  </p>
                </div>
              </div>

              <div
                class="card shadow-lg p-3 mb-5 bg-white rounded"
                style="width: 22rem"
              >
                <div class="card-body text-start">
                  <h4 class="card-title p-3">
                    <b>132$</b><sup style="font-size: 17px"> per unit</sup>
                  </h4>
                  <img
                    src="./public/images/elliot-l-angelier-4pq3qiOIET8-unsplash.jpg"
                    class="card-img-top img-thumbnail"
                    alt="..."
                  />
                  <h4 class="card-title py-3"><b>Gestoine</b></h4>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                  <p>
                    <a
                      href=""
                      class="card-text text-muted"
                      style="text-decoration: none"
                      >View Details</a
                    >
                  </p>
                </div>
              </div>

              <div
                class="card shadow-lg p-3 mb-5 bg-white rounded"
                style="width: 22rem"
              >
                <div class="card-body text-start">
                  <h4 class="card-title p-3">
                    <b>132$</b><sup style="font-size: 17px"> per unit</sup>
                  </h4>
                  <img
                    src="./public/images/elliot-l-angelier-4pq3qiOIET8-unsplash.jpg"
                    class="card-img-top img-thumbnail"
                    alt="..."
                  />
                  <h4 class="card-title py-3"><b>Gestoine</b></h4>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                  <p>
                    <a
                      href=""
                      class="card-text text-muted"
                      style="text-decoration: none"
                      >View Details</a
                    >
                  </p>
                </div>
              </div>
            </div>
          </div>
          <a
            href="#"
            id="btn"
            class="text-decoration-none text-white border p-2 rounded-4"
            style="background-color: hsl(12, 88%, 59%); width: 150px"
            >See more</a
          >
        </div>
      </div>
    </section>

    <section class="about mt-md-5 pb-5">
      <div class="container pt-3 pt-md-5">
        <div class="row d-md-flex justify-content-between align-items-center">
          <!-- responsive text problem due to col-10 v -->
          <div class="col-md-6 col-8 float-md-start text-md-start">
            <h1>About Us</h1>
            <br />
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores
              consectetur debitis unde sit eligendi labore a? Doloremque, natus
              minus corrupti quo aliquid incidunt ipsam ad voluptatum laboriosam
              dolore temporibus qui aperiam alias expedita? Quidem, illum! Odio,
              sit assumenda? Autem aspernatur saepe sapiente. Voluptates,
              deleniti. Culpa fugit facere quae magnam harum.
            </p>
            <button class="btn btn-outline-danger my-3">Discover more</button>
          </div>
          <div class="col-md-6 float-md-end">
            <img src="./public/images/aboutUs.png" alt="" class="img-fluid float-end" />
          </div>
        </div>
      </div>
    </section>

    <section class="contact mt-md-5 pb-5 bg-light">
      <div class="container pt-3 pt-md-5 d-flex flex-column">
        <h1 class="align-self-center">Contact Us</h1>
        <div class="row d-md-flex justify-content-between align-items-center">
          <!-- responsive text problem due to col-10 v -->
          <div class="col-md-6">
            <img src="./public/images/aboutUs.png" alt="" class="img-fluid float-start" />
          </div>

          <div class="col-md-6 col-8 float-md-end text-md-end">
            <h1 style="font-size: 30px">Keep in touch :</h1>
            <br />
            <form action="">
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input
                      type="text"
                      name="prenom"
                      id="form3Example1"
                      class="form-control"
                      placeholder="First name"
                      required
                    />
                    <!-- <label class="form-label" for="form3Example1">First name</label> -->
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input
                      type="text"
                      name="nom"
                      id="form3Example2"
                      class="form-control"
                      placeholder="Last name"
                      required
                    />
                    <!-- <label class="form-label" for="form3Example2">Last name</label> -->
                  </div>
                </div>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input
                  type="email"
                  name="email"
                  id="form3Example3"
                  class="form-control"
                  placeholder="Email address"
                  required
                />
                <!-- <label class="form-label" for="form3Example3">Email address</label> -->
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <textarea
                  name=""
                  class="form-control"
                  placeholder="Message"
                  id=""
                  cols="30"
                  rows="10"
                ></textarea>
              </div>

              <!-- Submit button -->
              <button class="btn btn-outline-danger my-3" style="width: 100px">
                Send
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>