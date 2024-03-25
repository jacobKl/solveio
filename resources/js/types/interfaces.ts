export interface ApiResponse {
    hasError: boolean
    result?: any
}

export interface ScrambleResponse extends ApiResponse {
    scramble: string[]
}


export interface SolverComponentInterface {
    scramble: string[]
    hasScramble: boolean
    timerVal: string
    currentlySolving: boolean
    interval: any
    startingAt: Date
    solveFinished: boolean
    solveTime: number
    solves: number[]
    classes: string
    chosenCube: number|null

    submitSolve: Function
}


export interface Component {
    getKey: Function
    getComponent: Function
}
