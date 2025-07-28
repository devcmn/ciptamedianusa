@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    @include('pages.home.hero')

    <!-- Product Preview Section -->
    @include('pages.home.product')

    <!-- In ranger search Section -->
    @include('pages.home.range-search')

    <!-- Projects Preview Section -->
    @include('pages.home.project')

    <!-- ISP Section -->
    @include('pages.home.isp.isp')

    <!-- Testimonials Section -->
    @include('pages.home.testimoni')

    <!-- Location Section -->
    @include('pages.home.location')

    <!-- CTA Section -->
    @include('pages.footer.cta')

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const viewMoreBtn = document.querySelector('.view-more-btn');
                const hiddenLogos = document.querySelector('.mobile-hidden-logos');

                if (viewMoreBtn && hiddenLogos) {
                    viewMoreBtn.addEventListener('click', function() {
                        hiddenLogos.style.display = hiddenLogos.style.display === 'block' ? 'none' : 'block';
                        viewMoreBtn.innerHTML = hiddenLogos.style.display === 'block' ?
                            'View Less <i class="fas fa-chevron-up ms-1"></i>' :
                            'View More Partners <i class="fas fa-chevron-down ms-1"></i>';
                    });
                }
            });

            $(document).ready(function() {
                // Initialize Select2 for both dropdowns
                $("#project-dropdown").select2();
                $("#cluster-dropdown").select2();

                // Handle project dropdown change
                $("#project-dropdown").on("change", function() {
                    var projectId = $(this).val();
                    if (projectId) {
                        // Enable cluster dropdown when a project is selected
                        $("#cluster-dropdown").prop("disabled", false);
                        $("#status-text").text("Status: Pilih cluster");

                        // Filter clusters based on selected project ID
                        var filteredClusters = clusters.filter(function(cluster) {
                            return cluster.project_id == projectId; // Assuming clusters have project_id
                        });

                        // Clear the current options in the cluster dropdown
                        $("#cluster-dropdown").empty();
                        $("#cluster-dropdown").append('<option value="">-- Pilih Cluster --</option>');

                        // Add filtered clusters as options
                        filteredClusters.forEach(function(cluster) {
                            $("#cluster-dropdown").append('<option value="' + cluster.id + '">' +
                                cluster.name + '</option>');
                        });
                    } else {
                        // Reset when no project is selected
                        $("#cluster-dropdown")
                            .prop("disabled", true)
                            .val("")
                            .trigger("change");
                        $("#status-text").text("Status: Pilih project dan cluster");
                        $("#subscribe-button").hide();
                    }
                });

                // Handle cluster dropdown change
                $("#cluster-dropdown").on("change", function() {
                    var clusterId = $(this).val();
                    if (clusterId) {
                        // Show "Terjangkau" and the subscribe button when a cluster is selected
                        $("#status-text").text("Status: Terjangkau");
                        $("#subscribe-button").show();
                    } else {
                        // Reset when no cluster is selected
                        $("#status-text").text("Status: Pilih cluster");
                        $("#subscribe-button").hide();
                    }
                });

                var clusters = Object.values(@json($clusters));
            });


            // Array of images
            const images = [
                "{{ asset('image/ciputra-pict/ciputra-scenery-1.png') }}",
                "{{ asset('image/ciputra-pict/ciputra-scenery-2.jpeg') }}",
                "{{ asset('image/ciputra-pict/ciputra-scenery-3.jpeg') }}",
                // "{{ asset('ciputra-pict/ciputra-scenery-4.png') }}"
            ];

            let currentIndex = 0;

            // Function to change image with fade effect
            function changeImage() {
                const imageElement = document.getElementById('sceneryImage');
                imageElement.style.opacity = 0; // Fade out

                setTimeout(() => {
                    currentIndex = (currentIndex + 1) % images.length; // Loop back to the first image
                    imageElement.src = images[currentIndex]; // Update image source
                    imageElement.style.opacity = 1; // Fade in
                }, 1000); // Wait for 1 second before changing the image
            }

            // Change the image every 5 seconds
            setInterval(changeImage, 5000); // Change every 5 seconds
        </script>
    @endpush

@endsection
