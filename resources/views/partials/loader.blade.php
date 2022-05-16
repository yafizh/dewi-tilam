<style>
    .overlay {
        left: 0;
        z-index: 999;
        top: 0;
        width: 100%;
        height: 100%;
        position: fixed;
        background: rgba(34, 34, 34, .5);
    }

    .overlay__content {
        left: 50%;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .spinner {
        width: 75px;
        height: 75px;
        display: inline-block;
        border-width: 2px;
        border-color: rgba(255, 255, 255, 0.05);
        border-top-color: #fff;
        animation: spin 1s infinite linear;
        border-radius: 100%;
        border-style: solid;
    }

    @keyframes spin {
        100% {
            transform: rotate(360deg);
        }
    }

</style>
<div class="overlay d-none">
    <div class="overlay__content">
        <span class="spinner"></span>
    </div>
</div>