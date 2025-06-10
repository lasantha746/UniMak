    <style>
        .loader {
            width: 40px;
            height: 26px;
            --c: no-repeat linear-gradient(#0612bc 0 0);
            background:
                var(--c) 0 100%,
                var(--c) 50% 100%,
                var(--c) 100% 100%;
            background-size: 8px calc(100% - 4px);
            position: relative;
        }

        .loader:before {
            content: "";
            position: absolute;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #fe0000;
            left: 0;
            top: 0;
            animation:
                l3-1 1.5s linear infinite alternate,
                l3-2 0.75s cubic-bezier(0, 200, .8, 200) infinite;
        }

        @keyframes l3-1 {
            100% {
                left: calc(100% - 8px)
            }
        }

        @keyframes l3-2 {
            100% {
                top: -0.1px
            }
        }



        /* Loading Animation */
        .page-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 1;
            transition: opacity 0.5s ease;
        }

        .page-loader.hidden {
            opacity: 0;
            pointer-events: none;
        }

      
    </style>

    <div class="page-loader" id="pageLoader">
        <div class="loader"></div>
    </div>