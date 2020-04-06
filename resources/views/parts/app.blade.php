<!DOCTYPE html>
<html lang="fa">
@include("parts.head")
<body>

<div id="wrapper">

    @include("parts.header")

    <div class="d-md-flex">

        @include("parts.sidebar")

        <div id="page-wrapper" class="p-4" style="min-height: 700px; padding-bottom: 200px !important;">

            @section("content")@show

        </div>

    </div>

</div>

@include("parts.foot")

</body>

</html>
