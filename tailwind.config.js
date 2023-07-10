module.exports = {
    content: ["./src/**/*.{html,js}",
              "./resources/**/*.blade.php"
              ],

    theme: {
      extend: {
          backgroundImage: theme => ({
              'bgOurWriters': "url('../../imgs/writersbg.svg')",
              'bgWaves': "url('../../imgs/waves.svg')",
              'bgtabs': "url('../../imgs/tabsbg.svg')",
          }),
          keyframes: {
            wiggle: {
                '0%, 100%': {
                    transform: 'rotate(-3deg)'
                },
                '50%': {
                    transform: 'rotate(3deg)'
                },
            },

        },
        animation: {
            wiggle: 'wiggle 1s ease-in-out infinite',
            // 'pulse': 'pulse 1s linear infinite',

        },
        colors:{
          //logo red color
          'color-primary':'#181D26',
          'color-primary-light':'#f68181',
          // logo blue color
          'color-secondry':'#00526C',
          'color-secondry-light':'#7FA8B5',

          'primary-one': '#19BCBD',
          'primary-two': '#176765',

        },
        }
  },

  plugins: [],
  }
