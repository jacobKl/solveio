import { ComponentInfo, SolverComponentInterface } from '../types/interfaces';
import Api from './../utils/api';

const SolverComponent = () => (<SolverComponentInterface>{
    scramble: [],
    hasScramble: false,
    timerVal: '00:00:000',
    currentlySolving: false,
    interval: null,
    startingAt: new Date(),
    solveFinished: false,
    solveTime: 0,
    solves: [],
    classes: "",

    async newScramble() {
        const { hasError, scramble } = await Api.newScramble();

        if (!hasError) {
            this.hasScramble = true
            this.scramble = scramble
        }
    },

    handleTimer(e: KeyboardEvent) {
        const { code } = e;
        if (code != 'Space') return;

        if (!this.currentlySolving && !this.solveFinished) {
            this.currentlySolving = true;
            this.startingAt = new Date();
            this.interval = setInterval(() => {
                const current = (new Date()).getTime();
                let milliseconds = current - this.startingAt.getTime();
                this.solveTime = milliseconds;

                let minutes = Math.floor(milliseconds / 60000); milliseconds -= minutes * 60000;
                let seconds = Math.floor(milliseconds / 1000); milliseconds -= seconds * 1000;

                this.timerVal = `${minutes.toString().padStart(2, "0")}:${seconds.toString().padStart(2, "0")}:${milliseconds.toString().padStart(3, "0")}`;
            }, 10);
        } else if (this.solveFinished) {
            this.solveFinished = false;
        }
    },

    stopTimer(e: KeyboardEvent) {
        const { code } = e;
        if (code != 'Space') return;

        if (this.currentlySolving) {
            this.currentlySolving = false;
            this.solveFinished = true;

            clearInterval(this.interval);
            this.classes = "";
            this.submitSolve();
        } else {
            this.classes = "bg-green-500";
        }
    },

    async submitSolve() {
        Api.submitSolve(this.solveTime)
    }
});

export const COMPONENT_INFO : ComponentInfo = {
    key: 'solver',
    component: SolverComponent
}
