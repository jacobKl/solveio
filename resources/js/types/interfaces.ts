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

    submitSolve: Function
}


export interface ComponentInfo {
    key: string
    component: object
}
